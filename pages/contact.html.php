<?php
 include_once '../includes/include.html';
?>
 <div class="columns">
    <div class="column">
      <form class="box" action=" ">
        <h2><strong>Feed Back Form</strong></h2>
        <div class="field">
        <label class="label" for="name">Name</label>
          <div class="control has-icons-left">
          <input class="input" type="text" name="name" id="name" placeholder="Name" required>
          <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
            </span>
          </div>
        </div>
        <div class="field">
          <label class="label" for="mail">E-mail</label>
            <div class="control has-icons-left">
              <input class="input" type="email" name="mail" id="mail" placeholder="E-mail" required>
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </div><br>
        <label class="label" for="phone">Mobile or Phone Number</label>
          <div class="control has-icons-left">
            <input class="input" type="text" name="phone" id="phone" placeholder="Mobile Phone Number" required>
            <span class="icon is-small is-left">
              <i class="fa fa-phone"></i>
            </span>
          </div><br>
        <label class="label" for="subject">Subject</label>
          <input class="input" type="tel" name="subject" id="subject" required><br><br>
        <label class="label" for="graph">Text</label>
          <textarea name="graph" id="graph" cols="30" rows="10" required></textarea>
        </div>
        <div class="control">
          
          <button class="button is-warning is-rounded" ><i class="fa fa-paper-plane" aria-hidden="true" st"></i>&nbsp; Send</button>
        </div>
      </form>
    </div>
    <div class="column">
      <div class="box">
        <div class="adress">
          <h2><strong>Address</strong></h2>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px"><i class="fa fa-map-marker" aria-hidden="true" style="float: left;"></i>&nbsp;405-4240 106 NW<br>&nbsp;&nbsp;&nbsp;&nbsp;Edmonton,Alberta<br>&nbsp;&nbsp;&nbsp;&nbsp;Canada.</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="fa fa-map-marker" aria-hidden="true" style="float: left;"></i>&nbsp;3, Irewole Street, off Omo-Akin Street,<br>&nbsp;&nbsp;&nbsp;&nbsp;Ilare Road, Owode Yewa, Yewa South<br>&nbsp;&nbsp;&nbsp;&nbsp;Ogun</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="fa fa-map-marker" aria-hidden="true" style="float: left;"></i>&nbsp;6, Era Road, Opp iVilla Guest Housse<br>&nbsp;&nbsp;&nbsp;&nbsp;Ilogbo-Elegba,Ijanikin, Oto-Awori<br>&nbsp;&nbsp;&nbsp;&nbsp;Lagos</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="fa fa-phone" aria-hidden="true" style="float: left;"></i>&nbsp;+234 815 617 1170<br>&nbsp;&nbsp;&nbsp;&nbsp;+234 815 157 1963<br>&nbsp;&nbsp;&nbsp;+234 815 157 1961<br>&nbsp;&nbsp;&nbsp;&nbsp;+234 907 628 6793</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="fa fa-at" aria-hidden="true" style="float: left;"></i>&nbsp;enquiry@smartbiz.com<br>&nbsp;&nbsp;&nbsp;&nbsp;cs@smartbiz.com<br>&nbsp;&nbsp;&nbsp;&nbsp;supports@smartbiz.com</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="fa fa-globe" aria-hidden="true" style="float: left;"></i>&nbsp;https://www.smartbiz.com</p>
          </div>
          <div class="control has-icons-left">
            <p style="display: inline-block; float: left; padding: 10px;"><i class="far fa-clock" aria-hidden="true" style="float: left;"></i>&nbsp;Office Open Time:<br>&nbsp;&nbsp;&nbsp;&nbsp;Mon-Fri: 8:00am - 6:00pm<br>&nbsp;&nbsp;&nbsp;&nbsp;Sat: 11:00am - 2:00pm</p>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div id="map">
      </div>
      
      </div>
  </div>
  <script>
      // Initialize and add the map
      function initMap() {
      // The location of Uluru
      var uluru = {lat: 6.4691043, lng: 3.143045};
      // The map, centered at Uluru
      var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyAg_qbHfwfeQr4iuMoz2ztITNMVk34Ysw0
&callback=initMap">
    </script>
</body>
</html>