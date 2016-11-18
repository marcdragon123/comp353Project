<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
  </head>
  <body>

    <?php include 'header.php'?>

 <!-- animations -->


 <div class="loadingScreen">
  <div class="white-bg centered radius50">
    <div class="logo-animation centered">
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="triangle2"></div>
    </div>
  </div>
</div>


    <div class="row removeMarginPadding removeMaxWidth">
      <div class="medium-2 columns removeMarginPadding requestPostSidebar removeMaxWidth">
        <form id="form">
        <ul class="vertical menu fullWidth fullHeight removeMaxWidth" data-drilldown>
          <li class="searchButton papaya-bg">
            <a class="orangeButton text-center" href="#findRide">Search</a>
            <ul class="vertical menu blush-bg text-center">
              <li>
              <input type="radio" name="gender" value="single"> Single Trip
              <input type="radio" name="gender" value="other"> Repeated/Routine<br>
              </li>
              <li>
                Departure:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                Postal Code <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="XXX-XXX"><br>
                City <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="Montreal"> <br>
                Province <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Destination:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                Postal Code <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="XXX-XXX"><br>
                City <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="Montreal"> <br>
                Province <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Date:  <br>
                <input class="postRequestForms marginCenter" type="date" name="bday" min="2016-09-09">
                <br> Dep. Time: <br>
                <input class="postRequestForms marginCenter" type="time" name="usr_time"><br><br>
              </li>
              <li>
              </li>
              <li>
                Riders <br>
                <input class="postRequestForms marginCenter" type="number" name="quantity" min="1" max="10">
              </li>

              <!-- <li>
                <br>
                Departure:
                <br><br>

                Postal Code<input class="postRequestForms " type="text" name="firstname" value="XXX-XXX">
            &nbsp; &nbsp;  &nbsp; &nbsp;  City <input class="postRequestForms " type="text" name="firstname" value="Montreal"> <br><br>
                Province &nbsp;  &nbsp;<input class="postRequestForms " type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Destination:<br><br>

                Postal Code<input class="postRequestForms " type="text" name="firstname" value="XXX-XXX">
            &nbsp; &nbsp;  &nbsp; &nbsp;  City <input class="postRequestForms " type="text" name="firstname" value="Montreal"> <br> <br>
                Province &nbsp;  &nbsp;<input class="postRequestForms " type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Date: &nbsp; &nbsp; &nbsp; &nbsp;
                <input class="postRequestForms marginCenter" type="date" name="bday" min="2016-09-09">
                Dep. Time:
                <input class="postRequestForms" type="time" name="usr_time"><br><br>
              </li>
              <li>
              </li>
              <li>
                Riders &nbsp; &nbsp; &nbsp; &nbsp;
                <input class="postRequestForms" type="number" name="quantity" min="1" max="10">
              </li> -->
              <li class=" floatBottomSubmitBotton fullWidth"><button class="orangeButton2 marginCenter" type="button" name="button">Submit</button></li>
            </ul>
          </li>
          <li class="requestButton aqua-bg">
            <a class="orangeButton text-center" href="#findRide">Request</a>
            <ul class="vertical menu blush-bg text-center ">
              <li>
                Departure:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                Postal Code <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="XXX-XXX"><br>
                City <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="Montreal"> <br>
                Province <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Destination:<br>
                <input class="postRequestForms marginCenter" type="text" name="firstname"><br>
                Postal Code <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="XXX-XXX"><br>
                City <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="Montreal"> <br>
                Province <br><input class="postRequestForms marginCenter" type="text" name="firstname" value="QC">
              </li>
              <li>
                <br>
                Date:  <br>
                <input class="postRequestForms marginCenter" type="date" name="bday" min="2016-09-09">
                <br> Dep. Time: <br>
                <input class="postRequestForms marginCenter" type="time" name="usr_time"><br><br>
              </li>
              <li>
              </li>
              <li>
                Riders <br>
                <input class="postRequestForms marginCenter" type="number" name="quantity" min="1" max="10">
              </li>
              <li class=" floatBottomSubmitBotton fullWidth"><button class="submitButton orangeButton2" type="button" name="button">Submit</button></li>
            </ul>
          </li>
          <li class="postButton blush-bg">
            <a class="orangeButton text-center" href="#postRide">Post</a>
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
                    <li class=" floatBottomSubmitBotton fullWidth"><button class="submitButton orangeButton2" type="button" name="button">Submit</button></li>
              </ul>
          </li>
        </ul>
        <form>
    </div>
      <div class="medium-10 columns removeMarginPadding 90height listings">
              <div id="map" class="map"></div>
              <div class="tripInfo">
                  <p>Trip info, 1/5 stars, the man may be dangerous</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                       Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                <img class="trip-info-profile-img" src="./style/pedo.jpg" href="#">
              </div>

              <!-- This is removble (the panel) as this shows the directions to take-->




              <ul class="tabs" data-tabs id="example-tabs">
                  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Browse Posted Rides</a></li>
                  <li class="tabs-title"><a href="#panel2">Browse Requests</a></li>
                </ul>
                <div class="tabs-content" data-tabs-content="example-tabs">
                  <div class="tabs-panel is-active" id="panel1">

                    <ul class="listingsOfItems">
                        <li class="list-item-1 "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>
                        <li class="list-item"><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
                    </ul>


                  </div>
                  <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                  </div>
                </div>

      </div>
    </div>


 <!-- js libraries -->


  <!-- google map stuff -->

 <script type="text/javascript">


//
//
//   var directionsService = new google.maps.DirectionsService();
//   var directionsDisplay = new google.maps.DirectionsRenderer();
//
//   var map = new google.maps.Map(document.getElementById('map'), {
//     zoom:7,
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   });
//
//   directionsDisplay.setMap(map);
//   //directionsDisplay.setPanel(document.getElementById('panel'));
//
//   var request = {
//     origin: '370 Glengarry Beaconsfield H9W 1A2',
//     destination: '1445 Maisonneuve Blvd W. H3G 1M8',
//     travelMode: google.maps.DirectionsTravelMode.DRIVING
// // This is to select the mode to a car and establish the origin and destination, need to  php echo in this thing to set the addresses from the database ()
//    };
//
//   directionsService.route(request, function(response, status) {
//     if (status == google.maps.DirectionsStatus.OK) {
//       directionsDisplay.setDirections(response);
//     }
//   });


var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8,
    zoomControl: true,
    zoomControlOptions: {
    position: google.maps.ControlPosition.TOP_RIGHT
    },
    streetViewControl: true,
    streetViewControlOptions: {
    position: google.maps.ControlPosition.RIGHT_TOP
    },
  });
}

function singleTrip(x){
  if(x.checked){
    document.getElementByID("").style.visibility ="hidden";
    document.getElementById("").style.visibility ="hidden";
  }
}

function multipleTrip(x){
  if(x.checked){
    document.getElementByID("").style.visibility ="hidden";
    document.getElementById("").style.visibility ="hidden";
  }
}

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.mediaQuery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.drilldown.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.dropdownMenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.tabs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.keyboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.motion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.nest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/plugins/foundation.util.timeAndImageLoader.js"></script>
<script>
   $(document).ready(function() {
      $(document).foundation();
   });

//    $(".logo-animation").click(function(){
//   $(this).addClass("skip-animation");
// });

// $(window).scroll(function() {
//   $('.list-item').each(function(){
//   var imagePos = $(this).offset().top;
//
//   var topOfWindow = $(window).scrollTop();
//     if (imagePos < topOfWindow+400) {
//       $(this).addClass("slideUp");
//     }
//   });
// });


// function isElementInViewport(elem) {
//     var $elem = $(elem);
//
//     // Get the scroll position of the page.
//     var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
//     var viewportTop = $(scrollElem).scrollTop();
//     var viewportBottom = viewportTop + $(window).height();
//
//     // Get the position of the element on the page.
//     var elemTop = Math.round( $elem.offset().top );
//     var elemBottom = elemTop + $elem.height();
//
//     return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
// }
//
// // Check if it's time to start the animation.
// function checkAnimation() {
//     var $elem = $('.list-item-img');
//
//     // If the animation has already been started
//     if ($elem.hasClass('fadeIn')) return;
//
//     if (isElementInViewport($elem)) {
//         // Start the animation
//         $elem.addClass('fadeIn');
//     }
// }
//
// // Capture scroll events
// $(window).scroll(function(){
//     checkAnimation();
// });

// $(".loadingScreen").click(function(){
//   $(".loadingScreen).addClass("skip");
//   });

   $(".list-item-1").click(function(){
     $(".map").addClass("show");
     $(".tripInfo").addClass("show");
     $(".trip-info-profile-img").addClass("show");
     google.maps.event.trigger(map, 'resize');
 });





</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJs8yjr_zbQlqOpayaT9W8AIShNp2TaXQ&callback=initMap"
async defer></script>

  </body>
</html>
