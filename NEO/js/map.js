/**
 * Created by edsan on 5/4/15.
 */
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