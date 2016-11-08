<?php include 'header.php'; ?>
<!-- Test template by Mihai Damaschin for SOEN 353 to simulate directions/distance/minutes-->

<!DOCTYPE html>
    <html> 
    <head> 
       <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
       <title>Google Maps API v3 Directions Example for SOEN 353 my place to the school</title> 
       <script type="text/javascript" 
               src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Fishing out the google maps map to compute directions-->

    </head> 
    <body style="font-family: Arial; font-size: 12px;"> 
       <div style="width: 600px;">
         <div id="map" style="width: 280px; height: 400px; float: left;"></div>
         <div id="panel" style="width: 300px; float: right;"></div>
<!-- This is removble function (the panel) as this shows the directions to take-->
       </div>
       
       <script type="text/javascript">
    
         var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
    
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom:7,
           mapTypeId: google.maps.MapTypeId.ROADMAP
         });
        
         directionsDisplay.setMap(map);
         directionsDisplay.setPanel(document.getElementById('panel'));
    
         var request = {
           origin: '373 Glengarry Beaconsfield H9W 1A2', 
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
    </body> 
    </html>