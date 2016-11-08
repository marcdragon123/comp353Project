
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
    <link rel="stylesheet" href="./style/style.css">
    <script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head>
  </head>
  <body>
  
<div class="loadingScreen">
  <div class="white-bg centered radius50">
    <div class="logo-animation centered">
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="triangle2"></div>
    </div>
  </div>

</div>

    <div class="top-bar top-barHeightWidth mustard-bg">
      <div class="top-bar-left mustard-bg">
        <ul class="dropdown menu mustard-bg" data-dropdown-menu>
          <li class="menu-text mustard-bg ">SUBER</li>
          <li class="radius50 mustard-bg">
            <a class="radius50 mustard-bg" href="#">One</a>
            <ul class="menu vertical mustard-bg">
              <li class="mustard-bg"><a class="mustard-bg" href="#">One</a></li>
              <li ><a href="#">Two</a></li>
              <li ><a href="#">Three</a></li>
            </ul>
          </li>
          <li ><a class=" radius50" accesskey=""href="#">Two</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu mustard-bg">
          <!-- <li><input type="search" placeholder="Search"></li>
          <li><button type="button" class="button">Search</button></li> -->
          <li class="radius50 mustard-bg"><p class ="radius50">
          powered by the DREAMTEAM
        </p></li>
        </ul>
      </div>
    </div>


    <div class="row removeMarginPadding removeMaxWidth">
      <div class="medium-2 columns removeMarginPadding requestPostSidebar removeMaxWidth">
        <form>
        <ul class="vertical menu fullWidth fullHeight removeMaxWidth" data-drilldown>
          <li class="requestButton aqua-bg">
            <a class="orangeButton text-center" href="#findRide">Find Ride</a>
            <ul class="vertical menu blush-bg text-center ">
                Departure:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
              </li>
              <li>
                Destination:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
              </li>
              <li>
                Date:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
              </li>
              <li>
                Duration:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
              </li>
              <li class=" floatBottomSubmitBotton fullWidth"><button class="submitButton orangeButton" type="button" name="button">Submit</button></li>
            </ul>
          </li>
          <li class="postButton blush-bg">
            <a class="orangeButton2 requestPostButton text-center" href="#postRide">Post Ride</a>
              <ul class="vertical menu aqua-bg text-center">
                  <!-- <li><a href="#postRide1">Start Location</a></li>
                  <li><a href="#postRide2">Destination</a></li>
                  <li><a href="#postRide3">Time</a></li>
                  <li class="floatBottom fullWidth" ><button class="submitButton orangeButton center" type="button submitButton orangeButton" name="button">Submit</button></li> -->
                    <li>
                      Departure:<br>
                      <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                    </li>
                    <li>
                      Destination:<br>
                      <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                    </li>
                    <li>
                      Date:<br>
                      <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                    </li>
                    <li>
                      Duration:<br>
                      <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                    </li>
                    <li class=" floatBottomSubmitBotton fullWidth"><button class="submitButton orangeButton" type="button" name="button">Submit</button></li>
              </ul>
          </li>
        </ul>
        <form>
    </div>
      <div class="medium-10 columns removeMarginPadding">
              <div id="map" class="map"></div>

              <!-- This is removble function (the panel) as this shows the directions to take-->
      </div>
    </div>
  <!--  <?php include 'index.php'; ?>-->


 <!-- js libraries -->


  <!-- google map stuff -->

 <script type="text/javascript">




  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom:7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  directionsDisplay.setMap(map);
  //directionsDisplay.setPanel(document.getElementById('panel'));

  var request = {
    origin: '370 Glengarry Beaconsfield H9W 1A2',
    destination: '1445 Maisonneuve Blvd W. H3G 1M8',
    travelMode: google.maps.DirectionsTravelMode.DRIVING
// This is to select the mode to a car and establish the origin and destination, need to <? php echo in this thing to set the addresses from the database ()
  };

  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.mediaQuery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.drilldown.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.dropdownMenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.keyboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.motion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.nest.js"></script>
<script>
   $(document).ready(function() {
      $(document).foundation();
   })
</script>

  </body>
</html>
