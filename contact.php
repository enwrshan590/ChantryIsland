<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL60hW1FdUjS_vV2_-p0LLL-fJeE_5wro"></script>
  </head>
  <body>

      <div id="socialMedDiv">
        <ul>
          <li><a href="https://www.facebook.com/MarineHeritageSociety" target="_blank"><img src="images/facebook_color.svg" alt="Facebook"></a></li>
          <li><a href="https://twitter.com/Chantry_Island?lang=en" target="_blank"><img src="images/twitter_color.svg" alt="Twitter"></a></li>
          <li><a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA?feature=watch" target="_blank"><img src="images/youtube_color.svg" alt="YouTube"></a></li>
          <li><a href="https://www.instagram.com/" target="_blank"><img src="images/instagram_color.svg" alt="Instragram"></a></li>
        </ul>
      </div>

    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <!-- Close button -->
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- Mobile menu -->
      <ul class="vertical menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="news.php" class="secLink">NEWS</a></li>
        <li><a href="events.php" class="secLink">EVENTS</a></li>
        <li><a href="restoration.php" class="secLink">RESTORATION</a></li>
        <li><a href="volunteers.php" class="secLink">VOLUNTEERS</a></li>
        <li><a href="booking.php">BOOKING</a></li>
        <li><a href="schedule.php" class="secLink">SCHEDULE & RATES</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="donations.php">DONATIONS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="signin.php" class="signinMob">SIGN IN</a></li>
      </ul>
    </div>

    <!-- Main body content -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <div class="title-bar-title"><img src="images/new_logo.svg" id="logo" alt="Logo"></div>
      </div>

      <!-- Desktop menu -->
      <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
        <div class="top-bar-left">
          <img src="images/new_logo.svg" id="deskLogo" alt="Logo">
          <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="index.php">HOME</a></li>
            <li>
              <a href="about.php">ABOUT</a>
              <ul class="menu vertical">
                <li><a href="news.php">NEWS</a></li>
                <li><a href="events.php">EVENTS</a></li>
                <li><a href="restoration.php">RESTORATION</a></li>
                <li><a href="volunteers.php">VOLUNTEERS</a></li>
              </ul>
            </li>
            <li>
              <a href="booking.php">BOOKING</a>
              <ul class="menu vertical">
                <li><a href="schedule.php">SCHEDULE & RATES</a></li>
              </ul>
            </li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="donations.php">DONATIONS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="signin.php" id="signinDesk">SIGN IN</a></li>
          </ul>
        </div>
      </div>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Contact</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec3">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 medium-6 large-6 columns" id="addressSec">
            <h3>Mailing Address</h3>
            <p>86 Saugeen Street<br>
            Southampton, Ontario<br>
            Canada, N0H 2L0</p>
          </div>
          <div class="small-12 medium-6 large-6 columns" id="bookTour3">
            <h3>Book a Tour</h3>
            <p>Pre-book to avoid disappointment.<br>
            Call: <a href="tel:519-797-5862">519-797-5862</a><br>
            Toll Free: <a href="tel:1-866-797-5862">1-866-797-5862</a></p>
          </div>
        </div>
      </div>

      <div class="row" id="mapSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Map</h3>
          <div class="preload-wrapper">
            <i class="fa fa-spinner fa-spin"></i>
            <span>Loading map, please wait...</span>
          </div>
          <div class="map-wrapper"></div>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="locatBlurb">
          <h3>Location</h3>
          <p>86 Saugeen St. Southampton, Ontario Canada N0H 2L0</p>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="directBlurb">
          <h3>Directions</h3>
          <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
        </div>
      </div>

      <div class="row" id="contactSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Contact</h3>
          <form action="contact.php" method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required><br>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea placeholder="Message" name="message" required></textarea>
            <input type="submit" name="submit" value="Submit" style="font-size: large;">
          </form>
        </div>
      </div>

     <!-- Footer -->
     <?php
       require_once("includes/footer.html");
     ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/map_api.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
