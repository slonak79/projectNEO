<?php

/* when we finish implementing the php page
if(!isset($_SESSION['username'])){
    header("Location: login.html");
}
*/

?>

<!DOCTYPE html>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"> </script>

<script>
var deployment = new google.maps.LatLng(36.6778, -121.6556);
var arrival = new google.maps.LatLng(23.1333, -82.3833);
    
var lat_coord = (deployment.lat() + arrival.lat()) / 2;
var lon_coord = (deployment.lng() + arrival.lng()) / 2;
    
var myCenter=new google.maps.LatLng(lat_coord,lon_coord);

var pinColor = "ffff00"
   var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|ffff00",
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
        
function initialize()
{
    var mapProp = {
      center:myCenter,
      zoom:3,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };

    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker=new google.maps.Marker({
      position: deployment
      });
    
    var arrivalMarker = new google.maps.Marker({
        position: arrival
    });

    marker.setMap(map);
    arrivalMarker.setMap(map);
    
    var deployTrip = [deployment,arrival];
    var flightPath = new google.maps.Polyline({
        path:deployTrip,
        strokeColor: "#0000FF",
        strokeOpacity: 0.8,
        strokeWeight: 2 });
    flightPath.setMap(map);
    
 google.maps.event.addListener(marker,'click',function() {
        map.setZoom(9);
        map.setCenter(marker.getPosition());
        
  });

  google.maps.event.addListener(arrivalMarker,'click',function() {
        map.setZoom(9);
        map.setCenter(arrivalMarker.getPosition());
  });
}
function createMarker(lat,long){
     return marker = new google.maps.LatLng(lat,long);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <style  type="text/css">
        body{
            background-color: #74AFAD;
        }
        div#googleMap { border-radius: 15px; margin: 0 auto 0 auto; }
        
         table,tr,td{    
            border: 2px solid black;
            border-collapse: collapse;
            background-color: #A3E0FF;
        }
        td{
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 10px;
        }
    
    </style>
    <title>Transportation</title>
</head>

<body>
    <h1 style = "text-align:center;">Deployment Map</h1>
<div id="googleMap" style="width:700px;height:380px;border:4px solid black;"></div>
    <br>
    
    
    <table  style = " border-radius: 25px;" align = "center"  >
        <tr><td colspan="2" style = "text-align:center;">Transportation Information</td></tr>
        <tr><td>Flight Departure</td><td>Salinas</td>     </tr>
        <tr><td>Flight Arrival</td><td>Cuba</td>          </tr>
        <tr><td>Vehicle Type</td><td>Airplane</td>        </tr>
        <tr><td>Destination</td><td>Cuba</td>             </tr>
        <tr><td>Departure Time</td><td>4/28/15 8:45am</td></tr>
        <tr><td>Arrival Time</td><td>4/28/15 1:05pm</td>  </tr>
        <tr><td>Flight Number</td><td>475810</td>         </tr>
         <tr><td>Airline Name</td><td>American Airlines</td></tr>
    </table>
</body>
</html>
