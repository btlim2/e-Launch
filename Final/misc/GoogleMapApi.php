<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/carousel/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
	<title> Welcome to e-Launch </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./Carousel Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Carousel Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	
<!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://www.e-launch.tk/">e-Launch</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://www.e-launch.tk/">Home</a></li>
				<li><a href="TimelineV2.html">Timeline</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Developers.html">Developers</a></li>
				
			<!--
                <li class="dropdown">
                  <a href="http://getbootstrap.com/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Action</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Another action</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Separated link</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">One more separated link</a></li>
                  </ul>
                </li>
			-->
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/intro-bg1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
				<h1>Welcome to e-Launch.</h1>
				<p></p>

			<!--  
				<p><a class="btn btn-lg btn-primary" href="" role="button">Sign up today</a></p>
			-->  
			  
				<br><br><br><br><br><br><br><br><!--Remove in the future -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/intro-bg2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
				<h1>Welcome to e-Launch.</h1>
				<p></p>
			<!--  
				<p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com/examples/carousel/#" role="button">Learn more</a></p>
			-->  
				<br><br><br><br><br><br><br><br> <!--Remove in the future -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/intro-bg3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
				<h1>Welcome to e-Launch.</h1>
				<p></p>
			<!--  
			  <p><a class="btn btn-lg btn-primary" href="http://expo.getbootstrap.com/" role="button">Browse gallery</a></p>
			-->
				<br><br><br><br><br><br><br> <!--Remove in the future -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- /.carousel -->


	<meta charset="UTF-8">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<link rel="stylesheet" href="css/GoogleMapApi.css">
	<link href="./Carousel Template for Bootstrap_files/carousel.css" rel="stylesheet">
		<script src = "js/json_parse.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&callback=initMap"
		async defer>
	</script>

	
		<link rel="stylesheet" href="css/floaty_nav.css" type="text/css">
		<link href="./Carousel Template for Bootstrap_files/carousel.css" rel="stylesheet">
	
	
</head>

<body>
	<!-- Floaty Nav-->
	<div id="floaty_nav" class="shrink">
		
		<a id="float_nav_1" href="#" class="first_nav selected">
			<span class="icon"></span>
			<span class="text">Top</span>
			
		</a>
		<a id="float_nav_2" href="#floaty_section_2" class="second_nav">

			<span class="icon"></span>
			<span class="text">Map Api</span>

		</a>
	</div>

	<div id="floaty_section_2"> </div>	
      <div id="content">
      <form id = "form" action="php/select.php" method="GET" target="forsubmit">
      <h2 align="center">Choose a business type</h2>
      <div align="center">
      <select class="btn btn-default" align="center" placeholder="Business Type" id="formname" name ="uh">
      <option value="Select a business type here!">Select a business type here!</option>
      <option value="Computer and Computer Peripheral Wholesaling"> Computer and Computer Peripheral Wholesaling</option>
      <option value="Credit Reporting and Debt Collection Services"> Credit Reporting and Debt  Collection Services</option>
      <option value="Free-to-Air Television Broadcasting"> Free-to-Air Television Broadcasting</option>
      <option value="General Insurance">General Insurance</option>
      <option value="Police Services"> Police Services</option>
      <option value="Local Government Administration"> Local Government Administration</option>
      </select>
      <select class="btn btn-default" align="center" placeholder="Post Code" id="postcode" name="pc">
      <option value="Select an area here!">Select an area here!</option>
      <option value="Melbourne (CBD)">Melbourne (CBD)</option>
      <option value="Docklands"> Docklands</option>
      <option value="Carlton"> Carlton</option>
      <option value="West Melbourne (Residential)"> West Melbourne (Residential)</option>
      <option value="North Melbourne"> North Melbourne</option>
      <option value="West Melbourne (Industrial)"> West Melbourne (Industrial)</option>
      <option value="East Melbourne"> East Melbourne)</option>
      <option value="Kensington"> Kensington</option>
      <option value="South Yarra/Melbourne Remainder"> South Yarra/Melbourne Remainder</option>
      <option value="Southbank"> Southbank</option>
      <option value="Port Melbourne"> Port Melbourne</option>
      </select>
      <button class="btn btn-default" align="center" type="submit" value="submit"  > check</button>
      </div>
      <div align="center">
      <iframe id="id_iframe" name="forsubmit" frameBorder=0 height="500" width="1000"  vspace="-100" hspace="-100" scrolling="no"></iframe>
       </div>
      </form>
      </div>
	</div>
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


	
	
	<hr class="featurette-divider">
	
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Company, Inc. · Privacy · Terms</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Carousel Template for Bootstrap_files/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
		<script src="js/common.js"></script>
	<script src="js/jquery-3.1.0.min.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
</body>
</html>