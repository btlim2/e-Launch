<?php
require 'connect.inc.php';
?>
<?php
if(isset($_GET['uh']) && !empty($_GET['uh']) && isset($_GET['pc']) && $_GET['pc']== "Select an area here!")
{    
     $uh = $_GET['uh'];
	if ($result = $mysqli->query("SELECT trading_name,location,trading_name,industry_description FROM business_register where industry_description = '$uh'")) {
    	while ($row = $result->fetch_object()){
			$brs[] = $row;
		}
		if(!empty($brs))
		$str = json_encode($brs);
		else
		echo "<script type='text/javascript'>alert('Oops,no record found!');</script>";
       }
}
else if(isset($_GET['uh']) && !empty($_GET['uh']) && isset($_GET['pc']) && $_GET['pc'] != "Select an type here!")
{
     $uh = $_GET['uh'];
     $pc = $_GET['pc'];

	if ($result = $mysqli->query("SELECT trading_name,location,trading_name,industry_description FROM business_register where industry_description = '$uh' and area = '$pc'")) {
    	while ($row = $result->fetch_object()){
			$brs[] = $row;
		}
                if(!empty($brs))
		$str = json_encode($brs);
		else
		echo "<script type='text/javascript'>alert('Oops,no record found in this area!');</script>";
       }
}
?>
<html>
<head>
      <script src = "js/json_parse.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&callback=initMap"
      async defer></script>
            <style>
      html, body,{
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
 <head>


 <body>
    <div id="map" align="center">
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -37.8197555926, lng: 144.956948523},
          zoom: 14
        });
        var json_str = '<?php echo $str;?>';
        var jsonObject = json_parse(json_str);
        //var marker;
        for(var i=0; i<jsonObject.length;i++)
        {
         jsonObject[i].location = jsonObject[i].location.replace('(','');
         jsonObject[i].location = jsonObject[i].location.replace(')','');
         jsonObject[i].location = jsonObject[i].location.split(",");
         var lat1 = parseFloat(jsonObject[i].location[0]);
         var lng1 = parseFloat(jsonObject[i].location[1]);
         //var addressInfo = JSON.stringify(showAddress());
         //console.log(addressInfo);
        // var addressInfo = showAddress();
        var infoAddress = geocodeLatLng(lat1,lng1);
        var infoContent = "<h3>" + jsonObject[i].industry_description + "</h3>" + "Service Provider: " + jsonObject[i].trading_name;
        addMarker(lat1,lng1,infoContent);
         }
      }
      function addMarker(la,ln,windowContent){
          var marker = new google.maps.Marker({
          position: {lat:la, lng: ln},
          map:map,
          //title: jsonObject[j].trading_name
          });
         var infowindow = new google.maps.InfoWindow({
            content : windowContent,
            position: {lat:la, lng: ln}
          });
          //infowindow.open(map, marker);
           google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
           }

        function geocodeLatLng(lat2,lng2) {
        //var input = document.getElementById('latlng').value;
        //var latlngStr = input.split(',', 2);
        var geocoder = new google.maps.Geocoder;
        var latlng = {lat: lat2, lng: lng2};
        var address;
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {
            //console.log(results[1].formatted_address);
            address = results[1].formatted_address;
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
        return address;
        //alert (address);
      }

    </script>
    </div>
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&callback=initMap"
    async defer></script>
  </body>
</html>

