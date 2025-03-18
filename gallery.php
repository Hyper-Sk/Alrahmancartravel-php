<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" />
  <title>Gallery - Alrahman Car Travel</title>

  <?php include './__head.php' ?>


  <link rel="stylesheet" href="./styles/gallery.css" />
  <link rel="stylesheet" href="./styles/__breadcrumb.css" />

  <link rel="stylesheet" href="./styles/__spinner.css" />

</head>

<body>

  <!-- spinner  -->
  <?php include "./__spinner.php" ?>

  <?php $page = 'gallery' ?>

  <!-- header section  -->
  <?php include './__header.php' ?>
  <!-- breadcrumb section  -->
  <section class="breadcrumb" style="background-image: url('./resources/places/golconda.jpg')">
    <div class="section-center">
      <div class="overlay">
        <p>
          <a href="./">Home</a> <i class="uil uil-angle-right-b"></i> Gallery
        </p>
      </div>
    </div>
  </section>

  <div class="heading section-center">
    <h2 class="heading__title">Our Gallery</h2>
    <p class="heading__desc">
      Al Rahman Car Travels is the reputed Tour and Cars rental service in
      Hyderabad. We make car hiring hassle free and simple and at Affordable
      price too and 24/7 customer Support for Best Car Rental Experience. All
      the cars in our fleet are available for local and outstation travel.
    </p>
  </div>

  <div class="all-images section-center">
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-1.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-2.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-3.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-4.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-5.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-6.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-7.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-8.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-9.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-10.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
    <div class="image__card">
      <img loading="lazy" src="./resources/gallery/img-11.jpeg" class="img-loading" alt="Image 1"
        style="cursor: pointer" />
    </div>
  </div>

  <!-- footer  -->
  <?php include './__footer.php' ?>

  <script src="./scripts/spinner.js"></script>

</body>

</html>