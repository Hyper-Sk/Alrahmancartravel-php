<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" />

  <title>404 Error - Absolute Grappling Academy</title>
  <link rel="stylesheet" href="./styles/days.css">

  <?php include './__head.php' ?>
  <style>
    .error-container {
      padding: 4rem;
    }

    .error-content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 80vh;

    }

    .error-content h2 {
      font-size: 10rem;
      letter-spacing: 10px;

    }

    .error-content h4 {
      margin-bottom: 1rem;
    }

    .error-content a {
      text-transform: capitalize;
      background-color: white;
      color: black;
      padding: 8px 20px;
      border-radius: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .error-content a i {
      color: black;
      font-size: 16px;
    }

    @media screen and (max-width: 576px) {
      .error-content h2 {
      font-size: 6rem;
      letter-spacing: 10px;

    }
    }
  </style>

</head>

<body>
  <?php $page = '404' ?>

  <!-- navbar section header  -->
  <?php //include './__header.php' ?>

  <section class="error-container">
    <div class="error-content">
      <h2>404</h2>
      <h4>Uh oh. That page doesn't exist.</h4>
      <a href="./"> Back to home <i class="bi bi-arrow-right"></i></a>
    </div>
  </section>

  <!-- footer section  -->
  <?php //include './__footer.php' ?>

  <script src="scripts/script.js"></script>
</body>

</html>