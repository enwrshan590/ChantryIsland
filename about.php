<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popForm = getAbout($id);
  $tbl = "tbl_about";
  $col = "about_id";
  $id = "about_id";
  $about = getSingle($tbl, $col, $id);

  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>About Chantry Island</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>

        <div class="small-12 medium-12 large-12 columns aboutVid">
          <video controls style="max-width: 600px; width:100%; margin-top: 2em;">
          <source src="video/Chantry-Island-Final_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="small-12 medium-12 large-12 columns aboutBlurb">
          <p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
        </div>
      </div>

      <div class="row" id="tabsSec">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#1">ISLAND</a></li>
            <li class="tabs-title"><a href="#2">LIGHTHOUSE</a></li>
            <li class="tabs-title"><a href="#3">BIRD SANCTUARY</a></li>
            <li class="tabs-title"><a href="#4">SUNSETS</a></li>
          </ul>
          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <?php
              while($row = mysqli_fetch_array($about)) {
                echo "<div class=\"tabs-panel row\" id=\"{$row['about_id']}\">";
                echo "<div class=\"small-12 medium-6 large-6 columns\">";
                echo "<img src=\"images/{$row['about_image']}\" alt=\"{$row['about_title']}\">";
                echo "</div>";
                echo "<div class=\"small-12 medium-6 large-6 columns\">";
                echo "<h4>{$row['about_title']}</h4>";
                echo "<p>{$row['about_content']}</p>";
                echo "</div>";
                echo "</div>";
              }
            ?>
            <div class="tabs-panel row" id="4">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_3.jpg" alt="Sunset">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_4.bmp" alt="Sunset">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="subCats">
        <div class="small-12 medium-6 large-4 columns" id="newsSec">
          <a href="news.php"><div id="newsImg"><h3>News</h3></div></a>
          <p>Want to know what is NEW around the Marine Heritage Society and Chantry Island? Click below to learn more about new projects, and get information about ongoing projects.</p>
          <a href="news.php" class="button">CLICK HERE >></a>
        </div>
        <div class="small-12 medium-6 large-4 columns" id="eventsSec">
          <a href="events.php"><div id="eventsImg"><h3>Events</h3></div></a>
          <p>Looking for information about up coming events held on Chantry Island or by the Marine Heritage Society? Click the link below to access that information.</p>
          <a href="events.php" class="button">CLICK HERE >></a>
        </div>
        <div class="small-12 medium-6 large-4 columns" id="restSec">
          <a href="restoration.php"><div id="restImg"><h3>Restoration</h3></div></a>
          <p>Interested in the restoration of Chantry Island’s iconic cottage and lighthouse? Click the link to learn about the process and history behind this beautiful island.</p>
          <a href="restoration.php" class="button">CLICK HERE >></a>
        </div>
      </div>

<?php
  require_once("includes/footer.php");
?>
