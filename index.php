<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="./favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0" />


  <title>Home - Al Rahman Car Travel</title>

  <!-- css  -->
  <?php include "./__head.php" ?>
  <link rel="stylesheet" href="./styles/__services.css">
  <link rel="stylesheet" href="./styles/index.css">
  <link rel="stylesheet" href="./styles/__spinner.css">


<body>
  <?php $page = 'home' ?>
  <!-- spinner  -->
  <?php include "./__spinner.php" ?>

  <!-- header section  -->
  <?php include "./__header.php" ?>

  <!-- slider section  -->
  <section class="slider">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide ">
          <div class="overlay">
            <div>
              <h2>Car <span>Rental</span></h2>
              <p>
                "Drive in style with our premium car rental services. Explore the world on your terms, choosing from our
                diverse fleet. Unleash the joy of travel with comfort and convenience."
              </p>
              <a href="car-rental.php">Read More</a>
            </div>
          </div>
          <img class="img-loading" loading="lazy"
            src="./resources/places/charminar.jpg"
            alt="" />
        </div>
        <div class="swiper-slide ">
          <div class="overlay">
            <div>
              <h2>Siteseeing <span>Tour</span></h2>
              <p>
                "Embark on a captivating journey with our sightseeing tours!
                Discover iconic landmarks, immerse in rich culture, and create
                unforgettable memories. Unveil the world's wonders through our
                expertly curated experiences."
              </p>
              <a href="./sightseeing-tour.php">Read More</a>
            </div>
          </div>
          <img class="img-loading" loading="lazy"
            src="./resources/places/birla-mandir.jpg"
            alt="golconda" />
        </div>
        <div class="swiper-slide ">
          <div class="overlay">
            <div>
              <h2>Luxary <span>Wedding Cars</span></h2>
              <p>
                "Experience opulence on your special day with our fleet of
                luxury wedding cars. Elevate your wedding with style and
                sophistication, creating timeless memories in the epitome of
                elegance and luxury."
              </p>
              <a href="wedding-cars.php">Read More</a>
            </div>
          </div>
          <img class="img-loading" loading="lazy"
            src="./resources/wedding-1.jpg"
            alt="birla mandir" />
        </div>
      </div>
    </div>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },

      });
    </script>
  </section>

  <!-- heading section  -->
  <section class="heading section-center">
    <h2 class="heading__title">Service</h2>
    <p class="heading__desc">
      Effortless travel starts here. Trust our comprehensive car services for
      a seamless and reliable transportation experience.
    </p>
  </section>

  <!-- sevices section  -->
  <section class="service section-center">
    <div class="card__single">
      <img class="img-loading" src="./resources/places/chowmahala-palace.jpg" alt="" />
      <div class="overlay">
        <a href="./sightseeing-tour.php">
          Sightseeing Tour <i class="uil uil-eye"></i></a>
      </div>
    </div>

    <div class="card__single">
      <img class="img-loading" src="./resources/rent.jpg" alt="" />
      <div class="overlay">
        <a href="./car-rental.php"> Car Rental <i class="uil uil-eye"></i></a>
      </div>
    </div>

    <div class="card__single">
      <img class="img-loading" src="./resources/wedding-cars/wedding-2.jpg" alt="" />
      <div class="overlay">
        <a href="./wedding-cars.php"> Wedding Car <i class="uil uil-eye"></i></a>
      </div>
    </div>
  </section>

  <!-- heading section  -->
  <div class="heading section-center">
    <h2 class="heading__title">About Us</h2>
    <p class="heading__desc">
      We are your gateway to unforgettable experiences. Committed to
      excellence, we provide seamless services, creating cherished memories.
    </p>
  </div>

  <!-- paragraphs  -->
  <section class="paragraph section-center">
    <p>
      Experience the essence of Hyderabad with our unparalleled journey
      through the City of Nizam. Founded in 1591 CE by Muhammad Quli Qutb
      Shah, this city on the banks of the Musi River is a testament to a rich
      cultural heritage, blending history with modernity under the lineage of
      Asaf Jahi rulers.
    </p>
    <p>
      We are dedicated to accompanying you throughout your Hyderabad
      expedition, offering rejuvenating city tours that encapsulate the charm
      of our beloved city. Whether it's a sightseeing adventure within
      Hyderabad, an excursion across the state, or venturing further into
      India, we are committed to providing top-notch services at unbeatable
      prices, ensuring your comfort every step of the way.
    </p>
    <p>
      Our services are tailored to cater to your every need, be it a leisurely
      cruise through historical monuments, tranquil parks, picturesque lakes,
      or indulging in the vibrant shopping scene within the city's malls. We
      take pride in being recognized as the premier car rental service
      provider in Hyderabad, offering round-the-clock assistance and a diverse
      range of services to suit your preferences.
    </p>
    <p>
      From comprehensive Hyderabad tour packages to specialized excursions
      like Srisailam Tours, Hyderabad Sightseeing Tours, daily city tours,
      wedding car rentals, airport transfers, and even group tours, we have
      you covered. Our fleet includes both economy and luxury cars, ensuring a
      seamless travel experience for all occasions, including school and
      college tours.
    </p>
    <p>
      Embrace the allure of Hyderabad with us, as we embark on a journey to
      explore its timeless beauty and cultural treasures, promising an
      unforgettable experience for travelers from all walks of life.
    </p>
  </section>

  <!-- foooter section  -->
  <?php include './__footer.php' ?>


  <script src="./scripts/spinner.js"></script>
</body>

</html>