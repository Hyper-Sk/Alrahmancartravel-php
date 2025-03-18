<?php
if (isset($_POST['send'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $newsletter = $_POST['newsletter'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    echo $firstname;
    echo $lastname;
    echo $newsletter;
    echo $email;
    echo $class;

    if ($newsletter) {
        $newsletter = 'true';
    } else {
        $newsletter = 'false';
    }
    
    $To = "shaik.sohail@crammaze.com";
    $DateOf = Date('d/m/y');
    $MailSubject = "Contact Us Request ($firstname $lastname $DateOf)";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: info@crammaze.com" . "\r\n" .
        "CC: info@crammaze.com" . "\r\n" . "Reply-To: $email";


    $Message = "<table
    style='border-spacing: 0px; width: 586px; margin-inline: auto; font-family: Geneva, Tahoma, sans-serif; background-color:rgb(244, 244, 244) ;'>
    <tr style='background-color: #000000; padding: 5px;'>
        <td colspan='2' style='padding: 5px;'>
            <img style='padding-left: 1rem;' src='http://absolutegrappling.com/resources/Absolute-Grappling-Academy-Logo.png' alt='logo' width='120'>
        </td>
    </tr>
    <tr >
        <td colspan='2' style='padding: 15px 10px;  border: 1px solid rgba(0,0,0,0.2); font-weight: 800; text-transform: capitalize; letter-spacing: 1px; text-align: center;'>
            Contact Query - Absolute Grappling Academy
        </td>
    </tr>
    <tr>
        <th
            style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
            Name </th>
        <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$firstname $lastname</td>
    </tr>
  
    <tr>
        <th
            style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
            Email </th>
        <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$email</td>
    </tr>
    <tr>
        <th
            style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
            Newsletter </th>
        <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$newsletter</td>
    </tr>
    <tr>
        <th
            style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
            Class </th>
        <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$class</td>
    </tr>
    <tr style='background-color: #1a1a1a;'>
        <td colspan='2' style='padding:15px; color: white;'>
            <span style='display:block; color: white; font-size: 14px; margin-bottom: 0px;'>
                From
            </span>
            <a target='_blank' href='https://crammaze.com' style='color: #e8e8e8; font-size: 14px;'>
                Crammaze INC
            </a>
        </td>
    </tr>
</table>
		";

    $Mail = mail($To, $MailSubject, $Message, $headers);
    if ($Mail) {
        header("Location: index.php");
    } else {
        header("Location: contact.php");
    }

}
?>