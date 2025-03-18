<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" />
  <title>Contact - Alrahman Car Travel</title>

  <?php include './__head.php' ?>
  <link rel="stylesheet" href="./styles/contact.css" />
  <link rel="stylesheet" href="./styles/__breadcrumb.css" />
  <link rel="stylesheet" href="./styles/__spinner.css" />
</head>

<body>
  <!-- spinner  -->
  <?php include "./__spinner.php" ?>

  <?php $page = 'contact' ?>

  <!-- header section  -->
  <?php include './__header.php' ?>


  <!-- breadcrumb section  -->
  <section class="breadcrumb" style="
        background-image: url('./resources/thumbs-up.jpg');
      ">
    <div class="section-center">
      <div class="overlay">
        <p>
          <a href="./">Home</a> <i class="uil uil-angle-right-b"></i> Contact
          Us
        </p>
      </div>
    </div>
  </section>

  <!-- heading section  -->
  <div class="heading section-center">
    <h2 class="heading__title">Contact Us</h2>
    <p class="heading__desc">
      Get in touch for personalized assistance. Our dedicated team is here to
      answer your queries and provide support.
    </p>
  </div>

  <!-- form section  -->
  <div class="form">
    <form class="form-container section-center" action="https://formsubmit.co/sohailshaiksk12345@gmail.com" method="POST">
      <div class="field">
        <label>Name</label><input type="text" name="name" required placeholder="Enter your Name" />
      </div>
      <div class="field">
        <label>Email</label><input type="email" name="email" required placeholder="Enter your Email" />
      </div>
      <div class="field">
        <label>Phone</label><input type="tel" name="phone" required maxlength="10"
          placeholder="Enter your phone number" />
      </div>
      <div class="field">
        <label>Message</label><textarea name="message" placeholder="Message Here..."></textarea>
      </div>
      <input type="hidden" name="_template" value="table">
      <input type="hidden" name="_subject" value="Contact Query!">
      <input type="hidden" name="_next" value="https://alrahmancartravel.com">
      <button type="submit">Submit</button>
    </form>
  </div>

  <!-- address section  -->
  <section class="contact-address section-center">
    <div class="contact__phone"><a href="tel:+918008846482"><i class="uil uil-outgoing-call"></i> <span>
          +918008846482</span></a></div>
    <div class="contact__whatsapp"><a href="http://wa.link/e98guy" target="_blank" rel="noopener noreferrer"><i
          class="uil uil-whatsapp"></i><span> +918008846482</span></a></div>
    <div class="contact__mail"><a href="mailto:alrahmancartravel@gmail.com" target="_blank" rel="noopener noreferrer"><i
          class="uil uil-envelope-download"></i> <span>alrahmancartravel@gmail.com</span></a></div>
    <div class="contact__address"><a href="#"><i class="uil uil-map-marker"></i><span>12-1-85/11, Mallepally, Asif
          Nagar, Hyderabad</span></a></div>
  </section>


  <!-- footer section  -->
  <?php include './__footer.php' ?>

  <script src="./scripts/spinner.js"></script>

</body>

</html>