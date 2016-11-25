<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
  </head>
  <body>

    <?php include 'header.php'?>

 <!-- animations -->


 <!--<div class="loadingScreen">
  <div class="white-bg centered radius50">
    <div class="logo-animation centered">
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="triangle2"></div>
    </div>
  </div>
</div>-->


    <div class="row removeMarginPadding removeMaxWidth">
      <div class="col1 medium-2 columns removeMarginPadding requestPostSidebar removeMaxWidth">


      <div class="profileCol text-center">
      <a id="profileBackButton">Back</a>
      <p> PEDO MAN </p>
      <img class="profile-img" src="./style/pedo.jpg" href="#">
      <br>
      <a class="profButton " >My Info</a>
      <br>
      <a class="profButton " >Inbox</a>
      <br>
      <a class="profButton " >Balance</a>
      <br>
      <a class="profButton " >Invite</a>
      </div>



      <div class="searchCol">
        <ul class="vertical menu fullWidth fullHeight removeMaxWidth" data-drilldown>
          <li class="searchButton papaya-bg">
            <a class="orangeButton text-center" href="#findRide" id="searchButton">Search</a>
            <ul class="vertical menu blush-bg text-center">
              <form id="searchForm">
              <li>
              <input type="radio" name="gender" value="single"> Single Trip
              <input type="radio" name="gender" value="other"> Repeated/Routine<br>
              </li>
              <li>
                Departure:<br>
                <input id="searchDep1" type="text" size="50" placeholder="Departure Address"><br>
              </li>
              <li>
                Destination:<br>
                <input id="searchDest1" type="text" size="50" placeholder="Destination Address"><br>
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
              <li class=" floatBottomSubmitBotton fullWidth"><button class="orangeButton2 marginCenter" type="button" name="button" id="submitButton">Submit</button></li>
              </form>
            </ul>
          </li>
          <li class="requestButton aqua-bg">
            <a class="orangeButton text-center" href="#findRide">Request</a>
            <ul class="vertical menu blush-bg text-center ">
            <form id="requestForm">
            <li>
              Departure:<br>
              <input id="searchDep2" type="text" size="50" placeholder="Departure Address"><br>
            </li>
            <li>
              Destination:<br>
              <input id="searchDest2" type="text" size="50" placeholder="Destination Address"><br>
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
              </form>
            </ul>
          </li>
          <li class="postButton blush-bg">
            <a class="orangeButton text-center" id="postButton" href="#postRide">Post</a>
              <ul class="vertical menu aqua-bg text-center">
              <form id="postForm" method="post" action="test.php">
                    <li>
                      Departure:<br>
                      <input id="searchDep3" type="text" size="50" placeholder="Departure Address" name="departure"><br>
                    </li>
                    <li>
                      Destination:<br>
                      <input id="searchDest3" type="text" size="50" placeholder="Destination Address" name="destination"><br>
                    </li>
                    <li>
                      <br>
                      Date:  <br>
                      <input class="postRequestForms marginCenter" type="date" name="dep_date" min="2016-09-09">
                      <br> Dep. Time: <br>
                      <input class="postRequestForms marginCenter" type="time" name="dep_time"><br><br>
                    </li>
                    <li>
                      Riders &nbsp; &nbsp; &nbsp; &nbsp;
                      <input class="postRequestForms" type="number" name="riders" min="1" max="10">
                    </li>
                    <li class=" floatBottomSubmitBotton fullWidth">
                    <button id="postMarker" class="submitButton orangeButton2" type="button" name="button">Search</button>
                    <button id="postSubmit" class="submitButton orangeButton2" type="submit"  name="button">Submit</button>
                    </li>
                  </form>
              </ul>
          </li>
        </ul>
        </div>



    </div>
      <div class="col2 medium-10 columns removeMarginPadding 90height listings">

      <div class="introCol text-center">
        <div class="textOverVid center">
        <h2> <p class="introTitle">SUBER </p></h2>
        <h4 class="introDesc1">Get to Where You Need To,   </h4>
        <h4 class="introDesc2">    Share a Ride,       </h4>
        <h4 class="introDesc3">          Community Driven   </h4>
        <p class="introText" style="font-size:50px;">
        Welcome to the World Greatest Ride Sharing Hub
        </p>
        </div>
         


      </div>

      <div class="profCol papaya-bg">
        <div class="myProfilePage">
        <form id="profileForm">

        </form>
        </div>
      </div>


      <div class="mapCol">
          <div class="wrapMapInfo">
              <div id="map" class="map"></div>

              <div class="postInfo">
              <p> put your info here </p>
              </div>

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
                <a class="backToListings " >back to Listings</a>
              </div>
          </div>
              <!-- This is removble (the panel) as this shows the directions to take-->



              <div class="listingRow hide">

              <ul class="tabs" data-tabs id="example-tabs">
                  <li class="tabs-title backThing"><a class="backThing" id="submitBackButton" >Back/Research</a></li>
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
                    </ul>

                  </div>
                  <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                  </div>
                </div>
                </div>
              </div>
      </div>
    </div>


 <!-- js libraries -->


  <!-- google map stuff -->

 <script type="text/javascript">


var imageIcon = {
  url: './style/car.png',
  // This marker is 20 pixels wide by 32 pixels high.
  size: new google.maps.Size(20, 32),
  // The origin for this image is (0, 0).
  origin: new google.maps.Point(0, 0),
  // The anchor for this image is the base of the flagpole at (0, 32).
  anchor: new google.maps.Point(10, 0)
};

var map;
var directionsService;
var directionsDisplay;


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

  directionsService = new google.maps.DirectionsService;
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);

  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('searchDep3')),
      {types: ['geocode']});
  autocomplete2 = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('searchDest3')),
          {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
  autocomplete2.addListener('place_changed', fillInAddress);

}


// var autocomplete, autocomplete2;
//
// function initAutocomplete(){
// var input = document.getElementById('searchDep');
//
// var input2 = document.getElementById('searchDest');
//
// var options = {
//
// };
//
//
// autocomplete = new google.maps.places.Autocomplete(input, options);
// autocomplete2 = new google.maps.places.Autocomplete(input2, options);
// }

var placeSearch, autocomplete, autocomplete2;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

// function initAutocomplete() {
//   // Create the autocomplete object, restricting the search to geographical
//   // location types.
// }


function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

function addMarker(){
  var place = autocomplete.getPlace();
  //alert(JSON.stringify(place.address_components));
  var markerDep = new google.maps.Marker({
    position: place.geometry.location,
    label: 'Departure Point',
    icon: imageIcon,
    title:"Departure Point",

});


var place2 = autocomplete2.getPlace();
//alert(JSON.stringify(place2.address_components));

var markerDest = new google.maps.Marker({
  position: place2.geometry.location,
  label: 'Destination',
  icon: imageIcon,
  title:"Destination",
});

markerDep.setMap(map);
markerDest.setMap(map);

directionsService.route({
  origin: {'placeId':place.place_id},
  destination:{'placeId':place2.place_id},
  travelMode: google.maps.TravelMode.DRIVING
}, function(response, status) {
  if (status == google.maps.DirectionsStatus.OK) {
    directionsDisplay.setDirections(response);

  } else {
    window.alert('Directions request failed due to ' + status);
  }
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
     $(".listingRow").addClass("hide");
     google.maps.event.trigger(map, 'resize');
 });

 $(".backToListings").click(function(){
   $(".map").removeClass("show");
   $(".tripInfo").removeClass("show");
   $(".trip-info-profile-img").removeClass("show");
   $(".listingRow").removeClass("hide");
   google.maps.event.trigger(map, 'resize');
 });

 $("#profileButton").click(function(){
   $(".profileCol").addClass("profileClicked");
   $(".searchCol").addClass("profileClicked");
   $(".mapCol").addClass("profileClicked");
   $(".profCol").addClass("profileClicked");
});

$("#profileBackButton").click(function(){
  $(".profileCol").removeClass("profileClicked");
  $(".searchCol").removeClass("profileClicked");
  $(".mapCol").removeClass("profileClicked");
  $(".profCol").removeClass("profileClicked");
  google.maps.event.trigger(map, 'resize');
});

$("#postButton").click(function(){
  $(".mapCol").addClass("postClicked");
  $(".map").addClass("postClicked");
  $(".tripInfo").addClass("postClicked");
  $(".postInfo").addClass("postClicked");
  $(".listingRow").addClass("hide");
  $(".introCol").addClass("hide");

  google.maps.event.trigger(map, 'resize');
});

$("#postBackButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".tripInfo").removeClass("postClicked");
  $(".postInfo").removeClass("postClicked");
  $(".listingRow").removeClass("hide");
  google.maps.event.trigger(map, 'resize');
});

$("#searchButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".tripInfo").removeClass("postClicked");
  $(".postInfo").removeClass("postClicked");
  $(".listingRow").removeClass("hide");
  $(".introCol").addClass("hide");
  google.maps.event.trigger(map, 'resize');
});

$("#submitButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".tripInfo").removeClass("postClicked");
  $(".postInfo").removeClass("postClicked");
  $(".listingRow").removeClass("hide");
  $(".searchCol").addClass("profileClicked");
  $(".col1").addClass("searchShift");
  $(".col2").addClass("searchShift");
  $(".mapCol").addClass("searchShift");
  $(".map").addClass("searchShift");
  $(".tripInfo").addClass("searchShift");
  $(".backThing").addClass("searchShift");
  $(".listingRow").addClass("searchShift");

  google.maps.event.trigger(map, 'resize');
});

$("#submitBackButton").click(function(){

  $(".searchCol").removeClass("profileClicked");
  $(".col1").removeClass("searchShift");
  $(".col2").removeClass("searchShift");
  $(".mapCol").removeClass("searchShift");
  $(".map").removeClass("searchShift");
  $(".tripInfo").removeClass("searchShift");
    $(".listingRow").removeClass("searchShift");

  google.maps.event.trigger(map, 'resize');
});

$("#postMarker").click(function(){
  addMarker();
});



</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJs8yjr_zbQlqOpayaT9W8AIShNp2TaXQ&callback=initMap&libraries=places"
async defer></script>

  </body>
</html>
