<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" />
  <title>Sightseeing Tour - Alrahman Car Travel</title>

  <?php include './__head.php' ?>

  <link rel="stylesheet" href="./styles/__breadcrumb.css" />
  <link rel="stylesheet" href="./styles/sightseeing-tour.css" />
  <link rel="stylesheet" href="./styles/__spinner.css" />
</head>

<body>

  <!-- spinner  -->
  <?php include "./__spinner.php" ?>

  <?php $page = 'sightseeing-tour' ?>

  <!-- header section  -->
  <?php include './__header.php' ?>


  <!-- breadcrumb section  -->
  <section class="breadcrumb" style="
        background-image: url('./resources/places/ramoji.jpg');
      ">
    <div class="section-center">
      <div class="overlay">
        <p>
          <a href="./">Home</a> <i class="uil uil-angle-right-b"></i> Sight
          Seeing Tour
        </p>
      </div>
    </div>
  </section>

  <!-- heading section  -->
  <div class="heading section-center">
    <h2 class="heading__title">Hyderabad City Tour Package</h2>
    <p class="heading__desc">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nesciunt.
    </p>
  </div>

  <!-- paragraph section  -->

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

  <!-- featured section  -->
  <section class="featured section-center">
    <div class="featured__text">
      <h3>Hyderabad City Tour Itinerary</h3>
      <ol>
        <li>Discover Hyderabad all day with our City Tour</li>
        <li>
          Experience a fixed itinerary tour exploring iconic sights like the
          Qutub Shahi Tombs, Golconda Fort, Charminar, Chowmahalla Palace,
          Salar Jung Museum, Birla Mandir, and Lumbini Park by Hussain Sagar
          Lake.
        </li>
        <li>Starts at 9 in the morning and ends at 9 in the evening.</li>
        <li>
          Included in the package are parking fees, driver's allowance, as
          well as convenient pickup and drop-off services from your residence
          or hotel.
        </li>
        <li>
          Not included are entry fees and meals throughout the day, which you
          will need to cover separately.
        </li>
      </ol>
    </div>
    <div class="featured__img">
      <img class="img-loading" src="./resources/places/charminar.jpg"
        alt="/static/media/charminar.7a201f1af34f339815b7.jpg" />
    </div>
  </section>

  <!-- pricing table  -->
  <section class="pricing-table section-center">
    <table>
      <tbody>
        <tr>
          <td>
            <img src="./resources/car-images/1.png" alt="swift" />
          </td>
          <td>
            <p>A/C</p>
            <p>Swift Dzire, Toyota Etios, Mahindra Verito</p>
          </td>
          <td>
            <p>4 Seater</p>
          </td>
          <td>
            <p>-</p>
          </td>
          <td>
            <p>
              <a href="tel:+918008846482">Book Now <i class="uil uil-arrow-up-right"></i></a>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="./resources/car-images/2.png" alt="swift" />
          </td>
          <td>
            <p>A/C</p>
            <p>Toyota Innova</p>
          </td>
          <td>
            <p>7 Seater</p>
          </td>
          <td>
            <p>-</p>
          </td>
          <td>
            <p>
              <a href="tel:+918008846482">Book Now <i class="uil uil-arrow-up-right"></i></a>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="./resources/car-images/3.png" alt="swift" />
          </td>
          <td>
            <p>A/C</p>
            <p>Chevrolet Tavera</p>
          </td>
          <td>
            <p>9 Seater</p>
          </td>
          <td>
            <p>-</p>
          </td>
          <td>
            <p>
              <a href="tel:+918008846482">Book Now <i class="uil uil-arrow-up-right"></i></a>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="./resources/car-images/4.png" alt="swift" />
          </td>
          <td>
            <p>A/C</p>
            <p>Tempo Traveller</p>
          </td>
          <td>
            <p>12 Seater</p>
          </td>
          <td>
            <p>-</p>
          </td>
          <td>
            <p>
              <a href="tel:+918008846482">Book Now <i class="uil uil-arrow-up-right"></i></a>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- footer section  -->
  <?php include './__footer.php' ?>

  <script src="./scripts/spinner.js"></script>

</body>

</html>