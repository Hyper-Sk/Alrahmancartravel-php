<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" />
  <title>Car Rental - Al Rahman Car Travel</title>

  <?php include './__head.php' ?>

  <link rel="stylesheet" href="./styles/car-rental.css" />
  <link rel="stylesheet" href="./styles/__breadcrumb.css" />
  <link rel="stylesheet" href="./styles/__spinner.css" />
</head>

<body>

  <!-- spinner  -->
  <?php include "./__spinner.php" ?>


  <?php $page = 'car-rental' ?>

  <!-- header section  -->
  <?php include './__header.php' ?>

  <!-- breadcrumb section  -->
  <section class="breadcrumb" style="background-image: url('./resources/car-1.jpg')">
    <div class="section-center">
      <div class="overlay">
        <p>
          <a href="./">Home</a> <i class="uil uil-angle-right-b"></i> Car
          Rental
        </p>
      </div>
    </div>
  </section>

  <!-- heading section  -->
  <div class="heading section-center">
    <h2 class="heading__title">Car Rental</h2>
    <p class="heading__desc">
      "Explore with ease. We rent premium cars for a seamless journey with our
      convenient and reliable service."
    </p>
  </div>

  <!-- all cars section  -->
  <section class="all-cars section-center">
    <div class="car-card">
      <img src="./resources/car-images/swift-dzire.jpg" alt="1" />
      <div class="car-card__text">
        <h3>Swift Desire</h3>
        <h4>8 Hour 80kms 2500 /-</h4>
        <p>Per Kms : 12 /- per km</p>
        <p>Extra Kms : 14 /- per km</p>
        <p>Extra Hour : 150 /- per Hour</p>
        <p>Per Calendar (day) : 300 km</p>
        <p>Drive Bhatta : 500</p>
        <p class="car-card__btn"><a href="tel:+918008846482">Book Now</a></p>
      </div>
    </div>
  </section>

  <!-- footer section  -->
  <?php include './__footer.php' ?>

  <script src="./scripts/spinner.js"></script>

</body>

</html>