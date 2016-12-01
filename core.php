<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Poppins:500" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
  </head>
  <body>

    <?php include 'header.php';?>

 <!-- animations -->
<?php if(isset($_GET['message']))

        if($_GET['message']=='success')
          echo "<script>alert('You just posted a ride.')</script>";
        else if($_GET['message']=='m1')
         echo "Ride was full!!";
       else if($_GET['message']=='m2')
         echo "You got registered to the ride.";
       ?>

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
      <a class="profileButton" >My Info</a>
      <br>
      <a class="inboxButton" >Inbox</a>
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
              <li class=" floatBottomSubmitBotton fullWidth"><button class="orangeButton2 marginCenter" type="button" name="button" id="searchSubmit">Submit</button></li>
              </form>
            </ul>
          </li>
          <li class="requestButton aqua-bg">
            <a class="orangeButton text-center" id="requestButton" href="#findRide">Request</a>
            <ul class="vertical menu blush-bg text-center ">
            <form id="requestForm" method="post" action="backend/postRequestController.php">
                    <li>
                      Single Trip <input id="radioSingle2" type="radio" name="tripType" value="singleTrip" checked><br><br>
                      Periodic    <input id="radioMult2" type="radio" name="tripType" value="periodic"><br><br>
                    </li>
                    <li>
                      Departure:<br>
                      <input class="postRequestForms marginCenter" id="searchDep3" type="text" size="50" placeholder="Departure Address" name="departure"><br>
                    </li>
                    <li>
                      Destination:<br>
                      <input  class="postRequestForms marginCenter" id="searchDest3" type="text" size="50" placeholder="Destination Address" name="destination"><br>
                    </li>
                    <li>
                      <div id="postDate">
                        <br>
                        Date:  <br>
                        <input class="postRequestForms marginCenter" type="date" name="dep_date" min="2016-09-09">
                      </div>
                    </li
                    <li>
                    <div id="postDays">
                    <br> Days: <br>
                    M<input  type="checkbox"  name="dow[]" value="M">
                    T<input  type="checkbox"   name="dow[]" value="T">
                    W<input  type="checkbox"   name="dow[]" value="W">
                    TH<input  type="checkbox"  name="dow[]" value="Th">
                    F<input  type="checkbox"   name="dow[]" value="F">
                    SAT<input  type="checkbox" name="dow[]" value="SAT">
                    SUN<input  type="checkbox" name="dow[]" value="SUN">
                    </div>
                    </li>
                    <li>
                      <br> Dep. Time: <br>
                      <input class="postRequestForms marginCenter" type="time" name="dep_time"><br><br>
                    </li>
                    <li>
                      Riders: <br>
                      <input class="postRequestForms" type="number" name="riders" min="1" max="10">
                    </li>
                    <br>Distance <br> <input class="postRequestForms marginCenter" id="distance" type="text" name="distance" value=" "  style="text-align:center;" readonly><br>
                    Duration <br> <input class="postRequestForms marginCenter" id="duration" type="text" name="duration" value=" " style="text-align:center;" readonly><br>
                    <li class=" floatBottomSubmitBotton fullWidth">
                    
                    <button id="requestSubmit" class="submitButton orangeButton2" type="submit"  name="button">Submit</button>
                    </li>
                  </form>
            </ul>
          </li>
          <li class="postButton blush-bg">
          <?php if(isDriver($_SESSION['user'])) {?>
            <a class="orangeButton text-center" id="postButton" href="#postRide">Post</a><?php } ?>
              <ul class="vertical menu aqua-bg text-center">
              <form id="postForm" method="post" action="backend/postRideController.php">
                    <li>
                      Single Trip <input id="radioSingle" type="radio" name="tripType" value="singleTrip" checked><br><br>
                      Periodic    <input id="radioMult" type="radio" name="tripType" value="periodic"><br><br>
                    </li>
                    <li>
                      Departure:<br>
                      <input class="postRequestForms marginCenter" id="searchDep3" type="text" size="50" placeholder="Departure Address" name="departure"><br>
                    </li>
                    <li>
                      Destination:<br>
                      <input  class="postRequestForms marginCenter" id="searchDest3" type="text" size="50" placeholder="Destination Address" name="destination"><br>
                    </li>
                    <li>
                      <div id="postDate">
                        <br>
                        Date:  <br>
                        <input class="postRequestForms marginCenter" type="date" name="dep_date" min="2016-09-09">
                      </div>
                    </li
                    <li>
                    <div id="postDays">
                    <br> Days: <br>
                    M<input  type="checkbox"  name="dow[]" value="M">
                    T<input  type="checkbox"   name="dow[]" value="T">
                    W<input  type="checkbox"   name="dow[]" value="W">
                    TH<input  type="checkbox"  name="dow[]" value="Th">
                    F<input  type="checkbox"   name="dow[]" value="F">
                    SAT<input  type="checkbox" name="dow[]" value="SAT">
                    SUN<input  type="checkbox" name="dow[]" value="SUN">
                    </div>
                    </li>
                    <li>
                      <br> Dep. Time: <br>
                      <input class="postRequestForms marginCenter" type="time" name="dep_time"><br><br>
                    </li>
                    <li>
                      Riders: <br>
                      <input class="postRequestForms" type="number" name="riders" min="1" max="10">
                    </li>
                    <br>Distance <br> <input class="postRequestForms marginCenter" id="distance" type="text" name="distance" value=" "  style="text-align:center;" readonly><br>
                    Duration <br> <input class="postRequestForms marginCenter" id="duration" type="text" name="duration" value=" " style="text-align:center;" readonly><br>
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
         <video playsinline autoplay muted loop poster="" id="bgvid" onended="run();">
          <source id="ss" src="./style/vids/vid1.mp4" type='video/mp4'>
          </video>


      </div>

      <div class="profCol papaya-bg">

      <!--myInfo-->

        <div class="myProfilePage show">
        <form id="profileForm">
          <?php $info = getProfileInfo($_SESSION['user']); 
          print_r($info); ?>
        <div style="margin-left:5em; margin-right:5em; padding-top:5em;">
            <div class="row">
              <div class="large-6 columns">
                User Name: <br>
                <input id="profName" type="text" size="50" placeholder="" value = '<?php echo $info['user_email'] ?>'>
              </div>
              <div class="large-3 columns">
               <br> Your Rating:
              <fieldset >
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
              </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="large-8 columns">
              About me: <br>
              <textarea rows="6" cols="50" id="profAbout" type="text" size="500" placeholder="myDesc"></textarea><br>
            </div>

            <div class="large-4 columns">
            <br>

            <!--Warning-->
            <form action="upload.php" method="post" enctype="multipart/form-data">
              Upload New Profile Image:
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
              </form>


            </div>
            </div>
            <div class="row">
            <div class="large-6 columns">
            My Address: <br>
              <input id="profAddress" type="text" size="50" placeholder="address" value = '<?php echo $info['address']; ?>'>
              <input type="checkbox" id="star5" name="rating" value="5" />
            </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    Date of Birth:  <br>
                    <input type="date" name="bday" min="1950-09-09" value = '<?php echo $info['dob'];?>'>
                    <input type="checkbox" id="star5" name="rating" value="5" />
                </div>
                <div class="large-4 columns">
                    My Email: <br>
                    <input id="profEmail" type="text" size="50" placeholder="email">
                    <input type="checkbox" id="star5" name="rating" value="5" />
                </div>
                <div class="large-4 columns end">
                    Driver License Number: <br>
                    <input id="profDLN" type="text" size="50" placeholder="">
                    <input type="checkbox" id="star5" name="rating" value="5" />
                </div>
                <p>Check side button if you want to hide info</p>
            </div>

            <input type="submit" value="submit">
            </div>

      </form>
    </div>

    <div class="myInbox">
    <ul class="listingsOfItems">
        <li class="list-item "><img class="list-item-img" src="./style/small_car.png" href="#">Ride Request</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Ride Request</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Request Accepted</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Message from  Pedo Man</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Message from Andres</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 2</li>
        <li class="list-item "><img class="list-item-img" src="./style/pedo.jpg" href="#">Link 1</li>

    </ul>

    <!-- Trigger/Open The Modal -->
<button id="myBtn">+ WRITE</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <div>
    <form id="messageForm">
    <div style="margin-left:5em; margin-right:5em; padding-top:5em;">
      <div class="row">
        <div class="large-12 columns">
          To this Address: <br>
            <input id="profAddress" type="text" size="50" placeholder="address">
        </div>
        <div class="large-12 columns">
          title <br>
            <input id="profAddress" type="text" size="50" placeholder="message title">
        </div>
        <div class="large-12 columns">
          Message Content: <br>
            <textarea rows="6" cols="50" id="profAbout" type="text" size="500" placeholder="myDesc"></textarea><br>
        </div>
        <input type="submit" value="submit">
      </div>
    </div>
  </form>
  </div>
  </div>

    <!--end of messaging-->


</div>
    </div>



    <!--end of profCol-->
      </div>


      <div class="mapCol">
          <div class="wrapMapInfo">

              <div id="map" class="map"></div>

              <div class="postInfo">
              <p> put your info here </p>
              </div>

              <div class="tripInfo">
              <?php  ?>
                  <p>Trip info, 1/5 stars, the man may be dangerous</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                       Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                        <?php

                          require_once('vendor/autoload.php');

                            $stripe = array(
                              "secret_key"      => "sk_test_4Y8J6BtKfO0EUM4yYE1SQbT5",
                              "publishable_key" => "pk_test_mztO0iJqX5ImleTFoDgfVAj1"
                            );

                            \Stripe\Stripe::setApiKey($stripe['secret_key']);
                         ?>
                         <form action="backend/takeRideController.php" method="post">
                         <input class="postRequestForms marginCenter" id="distance" type="text" name="departure" value=" "  style="text-align:center;" readonly>
                         <input class="postRequestForms marginCenter" id="distance" type="text" name="destination" value=" "  style="text-align:center;" readonly>
                         <input class="postRequestForms marginCenter" id="distance" type="text" name="d_time" value=" "  style="text-align:center;" readonly>
                         <input class="postRequestForms marginCenter" id="distance" type="text" name="date" value=" "  style="text-align:center;" readonly>
                         <input class="postRequestForms marginCenter" id="distance" type="text" name="distance" value=" "  style="text-align:center;" readonly>
                         <input class="postRequestForms marginCenter" id="r1" type="text" name="r_id" value=""  style="text-align:center;" readonly>
                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="<?php echo $stripe['publishable_key']; ?>"
                                    data-description="Access for a year"
                                    data-amount="50000"
                                    data-locale="auto"></script>
                        </form>
                <img class="trip-info-profile-img" src="./style/pedo.jpg" href="#">
                <a class="backToListings " >back to Listings</a>
              </div>
          </div>
              <!-- This is removble (the panel) as this shows the directions to take-->



              <div class="listingRow hide">

              <ul class="tabs" data-tabs id="example-tabs">
                  <li class="tabs-title backThing"><a class="backThing" id="searchSubmitBack" >Back/Research</a></li>
                  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Browse Posted Rides</a></li>
                  <li class="tabs-title"><a href="#panel2">Browse Requests</a></li>
              </ul>
                <div class="tabs-content" data-tabs-content="example-tabs">
                  <div class="tabs-panel is-active" id="panel1">

                    <ul class="listingsOfItems">
                    <script type="text/javascript">
                      
                      function setRideForm(id){
                        //alert(id);
                              document.getElementById('r1').value = id;
  }
                    </script>
                        <?php
                          $listOfRides = getallrides();
                          date_default_timezone_set('UTC');
                          while($row = $listOfRides->fetch_assoc()) { 
                            
                            if($row['date']>=date ( 'Y-m-d' )) {?>
                        <li  class="list-item  hvr-underline-from-center" id='<?php echo $row['rideID']; ?>' onclick='setRideForm(this.id);'><img class="list-item-img" src="./style/small_car.png" href="#"  >
                                 &nbsp &nbsp Departure: &nbsp &nbsp<?php echo $row['startLocation']; ?>
                                 &nbsp &nbsp Destination: &nbsp &nbsp<?php echo $row['endLocation']; ?>
                                 &nbsp &nbsp Date: &nbsp &nbsp<?php echo $row['date']; ?>
                                 &nbsp &nbsp Dep. Time: &nbsp &nbsp<?php echo $row['startTime']; ?>
                                 &nbsp &nbsp Price:  $ &nbsp &nbsp<?php echo $row['price']; ?>
                                 &nbsp &nbspPeriodic: &nbsp &nbsp<?php echo $row['isPeriodic']; ?>
                                 <?php if (getCurrentNumberRiders($row['rideID'])==getMaxNumberRiders($row['rideID'])) 
                                 echo 'FULL';?>

                                  </li>
                          <?php }}  ?>
                    </ul>

                  </div>
                  <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                  </div>
                </div>
                </div>

<!-----------------------------------------------request listing---------------------------------------------------------------->

                <div class="listingRequest">

                    <ul class="listingsOfItems">
                    <script type="text/javascript">
                      
                      function setRideForm(id){
                        //alert(id);
                              document.getElementById('r1').value = id;
  }
                    </script>
                        <?php
                          $listOfRides = getAllRequests();
                          date_default_timezone_set('UTC');
                          while($row = $listOfRides->fetch_assoc()) { 
                            
                            if($row['date']>=date ( 'Y-m-d' )) {?>
                            <form id='requestFullfillForm' action='backend/respondRequestController.php' method ='post'>
                              <li  class="list-item-post  hvr-underline-from-center" id='<?php echo $row['rideID']; ?>' onclick='setRideForm(this.id);'><img class="list-item-img" src="./style/small_car.png" href="#"  >
                                 &nbsp &nbsp Departure: &nbsp &nbsp
                                  <input  name="startLocation" value='<?php echo $row['start_location']; ?>'  readonly>
                                  <input  name="startLocation" value='<?php echo $row['request_id']; ?>'  readonly>
                                 &nbsp &nbsp Destination: &nbsp &nbsp
                                 <input  name="endLocation" value='<?php echo $row['end_location']; ?>'  readonly>
                                 &nbsp &nbsp Date: &nbsp &nbsp
                                 <input  name="date" value='<?php echo $row['date']; ?>'  readonly>
                                 &nbsp &nbsp Dep. Time: &nbsp &nbsp
                                 <input  name="startTime" value='<?php echo $row['start_time']; ?>'  readonly>
    
                                 &nbsp &nbsp Periodic: &nbsp &nbsp
                                 <input  name="isPeriodic" value='<?php echo $row['isPeriodic']; ?>'  readonly>
                                 <?php //if (getCurrentNumberRiders($row['rideID'])==getMaxNumberRiders($row['rideID'])) 
                                 //echo 'FULL';?>
                                 <button type="submit"  class="fulfillRequestButton">Fulfill Request</button>
                                  </li>
                            </form>
                          <?php }}  ?>
                    </ul>

                  </div>



              </div>
      </div>
    </div>


 <!-- js libraries -->


  <!-- google map stuff -->

 <script type="text/javascript">

 /************video loop*******************/
 video_count = 1;
 videoPlayer = document.getElementById("ss");
 video = document.getElementById("bgvid");

 function run(){
     video_count++;
     if (video_count == 3) video_count = 1;
     videoPlayer.setAttribute("src","video/vid"+video_count+".mp4");
     video.play();

 }

 /************video loop end*******************/
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

var placeSearch, autocomplete, autocomplete2;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

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
  var markerDep = new google.maps.Marker({
    position: place.geometry.location,
    label: 'Departure Point',
    icon: imageIcon,
    title:"Departure Point",

});


var place2 = autocomplete2.getPlace();

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

    var totalDistance = 0;
    var totalDuration = 0;

    var legs = response.routes[0].legs;
for(var i=0; i<legs.length; ++i) {
    totalDistance += legs[i].distance.value;
    totalDuration += legs[i].duration.value;
}

totalDistance= totalDistance+'m';
totalDuration= Math.round(totalDuration/60)+'mins';

$('#distance').val(totalDistance);
$('#duration').val(totalDuration);
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

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


//
   $(".list-item").click(function(){

     $(".map").addClass("show");
     $(".wrapMapInfo").addClass("show");
     $(".tripInfo").addClass("show");
     $(".trip-info-profile-img").addClass("show");
     $(".listingRow").addClass("hide");
     $(".mapCol").addClass("cover");
     google.maps.event.trigger(map, 'resize');
 });

 $(".backToListings").click(function(){
   $(".map").removeClass("show");
   $(".wrapMapInfo").removeClass("show");
   $(".tripInfo").removeClass("show");
   $(".trip-info-profile-img").removeClass("show");
   $(".listingRow").removeClass("hide");
   $(".mapCol").removeClass("cover");
   google.maps.event.trigger(map, 'resize');
 });

 $(".profileButton").click(function(){
   $(".profileCol").addClass("profileClicked");
   $(".searchCol").addClass("profileClicked");
   $(".mapCol").addClass("profileClicked");
   $(".mapCol").removeClass("searchShift");
   $(".profCol").addClass("profileClicked");
   $(".listingRow").addClass("hide");
   $(".introCol").addClass("hide");
   $(".myProfilePage").addClass("show");


   $(".col1").removeClass("searchShift");
   $(".col2").removeClass("searchShift");
   $(".mapCol").removeClass("searchShift");
   $(".map").removeClass("searchShift");
   $(".tripInfo").removeClass("searchShift");
   $(".listingRow").removeClass("searchShift");
   $(".myInbox").removeClass("show");

});

$("#profileBackButton").click(function(){
  $(".profileCol").removeClass("profileClicked");
  $(".searchCol").removeClass("profileClicked");
  $(".mapCol").removeClass("profileClicked");
  $(".profCol").removeClass("profileClicked");
  $(".listingRow").removeClass("hide");

  google.maps.event.trigger(map, 'resize');
});

$(".inboxButton").click(function(){
  $(".profileCol").addClass("profileClicked");
  $(".searchCol").addClass("profileClicked");
  $(".mapCol").addClass("profileClicked");
  $(".mapCol").removeClass("searchShift");
  $(".profCol").addClass("profileClicked");
  $(".listingRow").addClass("hide");
  $(".introCol").addClass("hide");
  $(".myInbox").addClass("show");

  $(".col1").removeClass("searchShift");
  $(".col2").removeClass("searchShift");
  $(".mapCol").removeClass("searchShift");
  $(".map").removeClass("searchShift");
  $(".tripInfo").removeClass("searchShift");
  $(".listingRow").removeClass("searchShift");
  $(".myProfilePage").removeClass("show");
});

$(".inboxBackButton").click(function(){
 $(".profileCol").removeClass("profileClicked");
 $(".searchCol").removeClass("profileClicked");
 $(".mapCol").removeClass("profileClicked");
 $(".profCol").removeClass("profileClicked");
 $(".listingRow").removeClass("hide");

 google.maps.event.trigger(map, 'resize');
});

$("#postButton").click(function(){
  $(".mapCol").addClass("postClicked");
  $(".map").addClass("postClicked");
  $(".tripInfo").addClass("postClicked");
  $(".postInfo").addClass("postClicked");
  $(".listingRow").addClass("hide");
  $(".introCol").addClass("hide");
  $(".wrapMapInfo").addClass("show");

  google.maps.event.trigger(map, 'resize');
});

$("#postBackButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".tripInfo").removeClass("postClicked");
  $(".postInfo").removeClass("postClicked");
  $(".listingRow").removeClass("hide");
    $(".wrapMapInfo").showClass("show");
  google.maps.event.trigger(map, 'resize');
});

$("#searchButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".introCol").addClass("hide");

  $(".tripInfo").removeClass("postClicked");
  $(".tripInfo").removeClass("show");
  $(".postInfo").removeClass("postClicked");
  $(".wrapMapInfo").removeClass("show");
  $(".listingRow").removeClass("hide");
  google.maps.event.trigger(map, 'resize');
});

$("#requestButton").click(function(){
  $(".mapCol").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".map").removeClass("postClicked");
  $(".introCol").addClass("hide");


  $(".tripInfo").removeClass("postClicked");
  $(".tripInfo").removeClass("show");
  $(".postInfo").removeClass("postClicked");
  $(".wrapMapInfo").removeClass("show");
  $(".listingRow").addClass("hide");

  $(".listingRequest").addClass("show");
});

$("#searchSubmit").click(function(){
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
  $(".wrapMapInfo").addClass("show");
  google.maps.event.trigger(map, 'resize');
});

$("#searchSubmitBack").click(function(){

  $(".searchCol").removeClass("profileClicked");
  $(".col1").removeClass("searchShift");
  $(".col2").removeClass("searchShift");
  $(".mapCol").removeClass("searchShift");
  $(".map").removeClass("searchShift");
  $(".tripInfo").removeClass("searchShift");
    $(".listingRow").removeClass("searchShift");
    $(".wrapMapInfo").removeClass("show");

  google.maps.event.trigger(map, 'resize');
});

// $("#radioSingle").click(function(){
//     $("#postDays").hide();
//
// });

// if ($('#radioSingle').is(':checked')) {
//   $("#postDays").hide();
// }
//
// if ($('#radioMult').is(':checked')) {
//   $("#postDate").hide();
// }



// $("#radioMult").click(function(){
//    $("#postDate").hide();
// });

$("#postMarker").click(function(){
  addMarker();
});

$('#postDays').hide();

$('#radioSingle').change(function () {
if (this.checked) {
$('#postDays').hide();
$('#postDate').show();
}
});

$('#radioMult').change(function () {
if (this.checked) {
$('#postDays').show();
$('#postDate').hide();
}
});


</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJs8yjr_zbQlqOpayaT9W8AIShNp2TaXQ&callback=initMap&libraries=places"
async defer></script>

  </body>
</html>
