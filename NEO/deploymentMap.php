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
