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

      <div class="row" id="schedSec">
        <div class="small-12 medium-12 large-12 columns">
          <h3>Schedule</h3>
          <table class="tg">
            <tr>
              <th class="tg-s6z2" id="dateTitle">DATE</th>
              <th class="tg-baqh" id="timeTitle" colspan="2">TIME</th>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row1">May 27, 28</td>
              <td class="tg-s6z2 borderClass row1">1:00 PM</td>
              <td class="tg-s6z2 row1">3:00 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row2">June 3, 4, 10, 11, 17, 18, 24, 25</td>
              <td class="tg-s6z2 borderClass row2">1:00 PM</td>
              <td class="tg-s6z2 row2">3:00 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row3">July 1 - Sept 4<br>(7 days a week)</td>
              <td class="tg-s6z2 borderClass row3">1:00 PM</td>
              <td class="tg-s6z2 row3">3:00 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row4">July weekends<br>Saturday and Sunday<br>(Additional morning tour)</td>
              <td class="tg-s6z2 row4" colspan="2">9:30 AM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row5">Aug 1 - Aug 31<br>(Additional morning tour)</td>
              <td class="tg-s6z2 row5" colspan="2">9:30 AM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row6">Tour base open May/June weekends</td>
              <td class="tg-s6z2 row6" colspan="2">12:00 PM - 5:30 PM</td>
            </tr>
            <tr>
              <td class="tg-s6z2 borderClass row7">Tour base open July 1 - Sept 4 every day</td>
              <td class="tg-s6z2 row7" colspan="2">9:00 AM - 5:30 PM</td>
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