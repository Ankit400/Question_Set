<!DOCTYPE html>
<html>
<head>
	<title>Globe Map</title>
	<!--############## Bootstrap CDN ######################-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--#################### Google Map Api ###########################-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNIZo7oUWfsoLGHG1Y4j4eL5ZKMmHBx1Q&callback=loadMap"></script>
</head>
<body>
	<div class="container">
	<h2>Our Map</h2>
	<input type="text" name="data" id="text">
	<div id="map"></div>
	</div>
<script>
	function loadMap(){
		var India={lat: 20.5937, lng: 78.9629};
		var map= new google.maps.Map(document.getElementById('map'), {
			zoom:4,
			center: pune
		});

		var marker = new google.maps.Marker({
			position: pune,
			map:map
		}); 
	}
</script>
 </body>
</html>