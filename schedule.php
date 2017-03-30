<?php
  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $popContact = getContact();

  $id = 1;
  $popRates = getRates($id);


  require_once("includes/header.php");
?>

      <!-- Header section -->
      <div class="row aboutInfo">
        <div class="small-12 medium-12 large-12 columns aboutHead">
          <h2>Booking Schedule & Rates</h2>
          <img src="images/wheel.svg" alt="Boat wheel" class="wheel">
        </div>
      </div>

      <div class="row bookingSec">
        <div class="small-12 small-centered medium-12 large-12 columns">
          <div class="small-12 medium-7 large-7 columns" id="ratesSec">
            <h3>Chantry Island Tour Schedule and Rates</h3>
            <p><?php echo $popRates['schedule_text'] ?></p>
          </div>
          <div class="small-12 medium-4 large-4 columns" id="bookTour2">
            <h3>Book a Tour</h3>
            <p>Pre-book to avoid disappointment.<br>
            Call: <a href="tel:<?php echo $popContact['contact_phone'] ?>"><?php echo $popContact['contact_phone'] ?></a><br>
            Toll Free: <a href="tel:<?php echo $popContact['contact_tollphone'] ?>"><?php echo $popContact['contact_tollphone'] ?></a></p>
          </div>
        </div>
      </div>

      <div class="row" id="tabsSec">
        <div class="small-12 medium-12 large-12 columns">
          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panelA">APRIL</a></li>
            <li class="tabs-title"><a href="#panelB">MAY</a></li>
            <li class="tabs-title"><a href="#panelC">JUNE</a></li>
            <li class="tabs-title"><a href="#panelD">JULY</a></li>
            <li class="tabs-title"><a href="#panelE">AUGUST</a></li>
            <li class="tabs-title"><a href="#panelF">SEPTEMBER</a></li>
          </ul>

          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active row" id="panelA">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/george_plant/peerless_3.jpg" alt="Tour Boat" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: George Plant">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <h4>Chantry Island</h4>
                <p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
              </div>
              <div class="small-12 medium-6 large-6 columns" id="glacialBlurb">
                <p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.<br><br>
                The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>
              </div>
              <div class="small-12 medium-6 large-6 columns" id="boatTourImg">
                <img src="images/wayne_macdonald/tour_boat.jpg" alt="Tour Boat" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Wayne MacDonald">
              </div>
            </div>

            <div class="tabs-panel row" id="panelB">
              <div class="small-12 medium-6 large-6 columns">
                <h4>The Lighthouse History</h4>
                <p>During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.<br><br>
                The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.</p>
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/vicki_tomori/island_1.jpg" alt="Lighthouse" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Vicki Tomori">
              </div>
            </div>

            <div class="tabs-panel row" id="panelC">
              <div class="small-12 medium-6 large-6 columns">
                <h4>Federal Bird Sanctuary</h4>
                <p>In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.<br><br>
                Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.</p>
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/carol_walberg/birds_1.jpg" alt="Birds" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Carol Walberg">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/nancy_calder/birds_3.jpg" alt="Birds" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Nancy Calder">
              </div>
            </div>

            <div class="tabs-panel row" id="panelD">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_3.jpg" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_4.bmp" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
            </div>

            <div class="tabs-panel row" id="panelE">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_3.jpg" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_4.bmp" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
            </div>

            <div class="tabs-panel row" id="panelF">
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_3.jpg" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
              <div class="small-12 medium-6 large-6 columns">
                <img src="images/terry_thomas/sunset_4.bmp" alt="Sunset" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Image by: Terry Thomas">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="schedSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Chantry Island Tour Base & Gift Shop </h3>
          <table class="tg">
            <tr>
              <th class="tg-s6z2" id="dateTitle">DATE</th>
              <th class="tg-baqh" id="timeTitle" colspan="2">TIME</th>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row1">May 27, 28</td>
              <td class="tg-s6z2 borderClass row1">12:00 PM</td>
              <td class="tg-s6z2 row1">5:30 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row2">June 3, 4, 10, 11, 17, 18, 24, 25</td>
              <td class="tg-s6z2 borderClass row2">12:00 PM</td>
              <td class="tg-s6z2 row2">5:30 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row3">July 1 - Sept 4<br>(7 days a week)</td>
              <td class="tg-s6z2 borderClass row3">9:00 PM</td>
              <td class="tg-s6z2 row3">5:30 PM</td>
            </tr>
          </table>
        </div>
        <div class="small-12 medium-12 large-12 columns" id="ratesBlurb">
          <h3>Rates</h3>
          <p><?php echo $popRates['schedule_rates'] ?></p>
        </div>
      </div>     

<?php
  require_once("includes/footer.php");
?>