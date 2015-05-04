<?php
/* when we finish implementing the php page
if(!isset($_SESSION['username'])){
    header("Location: login.html");
}
*/
?>

<!DOCTYPE html>
<html>
<?php require "header.php";?>

<body>
<h1 style = "text-align:center;">Deployment Map</h1></div>
<br>
<div align="center">
    <div id="googleMap" style="width:700px;height:380px;border:4px solid black;"></div>

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
</div>

</body>
<?php require "footer.php"; ?>
<script src="http://maps.googleapis.com/maps/api/js"> </script>
<script src="js/map.js" type="text/javascript"></script>
</html>