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
          <a href="index.php"><img src="images/new_logo.svg" id="deskLogo" alt="Logo"></a>
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