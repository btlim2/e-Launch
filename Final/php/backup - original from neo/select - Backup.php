<?php
require 'connect.inc.php';
?>

<?php
if(isset($_GET['uh']) && !empty($_GET['uh']))
{    $results = array();
     $uh = $_GET['uh'];
     //$query = "select * from business_register where industry_description ='$uh'";
     $sq = "'";
     $query = "select trading_name,location from business_register where industry_description = '$uh'";
     if($query_run=mysql_query($query)){
       if(mysql_num_rows($query_run)==NULL)
       {echo 'no record found';}
       else{
           //$results = array();
           while($query_row = mysql_fetch_assoc($query_run)){
               //$id = $query_row['property_id'];
               //echo $id. '<br>' ;
               //$query_row = mysql_fetch_assoc($query_run);
               $results[]=$query_row;
           }
        $str = json_encode($results);
       }
       }
     else{
          echo msql_error();
     }
}
?>
<html>
<head>
      <script src = "js/json_parse.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&callback=initMap"
    async defer></script>
      <script>
        function a(){
        var json_str = '<?php echo $str;?>';
        var jsonObject = json_parse(json_str);
        document.write(json_str);
        for(var i=0; i<jsonObject.length;i++)
        {
         jsonObject[i].location = jsonObject[i].location.replace('(','');
         jsonObject[i].location = jsonObject[i].location.replace(')','');
         jsonObject[i].location = jsonObject[i].location.split(",");
         //for(var j=0;j< jsonObject[i].location.length;j++)
         //{
          //  document.write(parseFloat(jsonObject[i].location[j]));
        // }
         var lat1 = parseFloat(jsonObject[i].location[0]);

         var lng1 = parseFloat(jsonObject[i].location[1]);
         //document.write("</td>",jsonObject[i].location,"</td>");
         
         var marker = new google.maps.Marker({
          position: {lat:lat1, lng: lng1},
          map:map,
          title: jsonObject[i].trading_name
          });
          var infowindow = new google.maps.InfoWindow({
          content: jsonObject[i].trading_name
          });
          marker.addListener('click', function() {
          infowindow.open(map, marker);
          });

        }
        }
        </script>
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
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -37.8197555926, lng: 144.956948523},
          zoom: 14
        });
        var json_str = '<?php echo $str;?>';
        var jsonObject = json_parse(json_str);
        var infowindow;
        var addListener;
        var marker;
        for(var i=0; i<jsonObject.length;i++)
        {
         jsonObject[i].location = jsonObject[i].location.replace('(','');
         jsonObject[i].location = jsonObject[i].location.replace(')','');
         jsonObject[i].location = jsonObject[i].location.split(",");
        // for(var j=0;j< jsonObject[i].location.length;j++)
        // {
            //document.write(parseFloat(jsonObject[i].location[j]));
         //}
         var lat1 = parseFloat(jsonObject[i].location[0]);

         var lng1 = parseFloat(jsonObject[i].location[1]);
         //document.write("</td>",jsonObject[i].location,"</td>");
        // infowindow[i] = new google.maps.InfoWindow({
        // content: jsonObject[i].trading_name
       // });
         var marker = new google.maps.Marker({
          position: {lat:lat1, lng: lng1},
          map:map,
          title: jsonObject[i].trading_name
          }); 
          // marker.addListener('click', function() {
          // infowindow[i].open(map, marker); });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&callback=initMap"
    async defer></script>
  </body>
</html>

