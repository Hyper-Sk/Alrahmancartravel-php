<section class="topbar">
  <div class="topbar-content">
    <div>
      <a href="tel:+918008846482">
        <i class="uil uil-phone"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=918008846482&text=Hello%20%F0%9F%91%8B">
        <i class="uil uil-whatsapp"></i>
      </a>
    </div>
    <div>
      <a href="https://www.facebook.com/">
        <i class="uil uil-facebook-messenger-alt"></i>
      </a>
      <a href="mailto:sohailshaiksk12345@gmail.com">
        <i class="uil uil-envelope-alt"></i>
      </a>
    </div>
  </div>
</section>

<header class="header">
  <div class="header-content">
    <div class="header__logo">
      <img src="./resources/logo.png" alt="logo">
    </div>
    <div class="header__menu">
      <a href="./" class="<?php if ($page === 'home') {
        echo "active";
      } ?>">Home</a>
      <a href="./car-rental.php" class="<?php if ($page === 'car-rental') {
        echo "active";
      } ?>">Car Rental</a>
      <a href="./sightseeing-tour.php" class="<?php if ($page === 'sightseeing-tour') {
        echo "active";
      } ?>">Sightseeing Tour</a>
      <a href="./gallery.php" class="<?php if ($page === 'gallery') {
        echo "active";
      } ?>">Gallery</a>
      <a href="./wedding-cars.php" class="<?php if ($page === 'wedding-cars') {
        echo "active";
      } ?>">Wedding Cars</a>
      <a href="./contact.php" class="<?php if ($page === 'contact') {
        echo "active";
      } ?>">Contact</a>
    </div>
  </div>

  <div class="mobile-content">
    <div class="mobile__logo">
      <img src="./resources/logo.png" alt="logo">
    </div>
    <div class="mobile__open">
      <i class="uil uil-apps"></i>
    </div>
  </div>

  <aside class="aside">
    <div class="aside-content">
      <a href="./" class="<?php if ($page === 'home') {
        echo "active";
      } ?>">Home</a>
      <a href="./car-rental.php" class="<?php if ($page === 'car-rental') {
        echo "active";
      } ?>">Car Rental</a>
      <a href="./sightseeing-tour.php" class="<?php if ($page === 'sightseeing-tour') {
        echo "active";
      } ?>">Sightseeing Tour</a>
      <a href="./gallery.php" class="<?php if ($page === 'gallery') {
        echo "active";
      } ?>">Gallery</a>
      <a href="./wedding-cars.php" class="<?php if ($page === 'wedding-cars') {
        echo "active";
      } ?>">Wedding Cars</a>
      <a href="./contact.php" class="<?php if ($page === 'contact') {
        echo "active";
      } ?>">Contact</a>
    </div>
    <div class="social-content">
      <a href="tel:+91 8008846482"><i class="uil uil-phone"></i> +91 8008846482</a>
      <a href="https://api.whatsapp.com/send?phone=918008846482&text=Hello%20%F0%9F%91%8B"><i
          class="uil uil-whatsapp"></i> whatsapp</a>
      <a href="https://www.facebook.com/"><i class="uil uil-facebook-messenger-alt"></i> facebook</a>
      <a href="mailto:sohailshaiksk12345@gmail.com"><i class="uil uil-envelope-alt"></i> Email</a>
    </div>

    <div class="aside__close">
      <i class="uil uil-times"></i>
    </div>
  </aside>

  <script src="./scripts/header.js"></script>
</header>