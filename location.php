<?php
session_start();
include 'connection.php';

$user_id=$_SESSION['customerID'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/loho.jpg" />       
<title>TeleShop Nepal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<style type="text/css">


/* map needs width and height to appear */
#map{
	margin-top: 38px;
	width: 1000px;
	max-width: 100%;
	height: 550px;
}
#info_div{
	margin-top: 20px;
	margin-right: 100px;
	border: 2px solid;
	padding: 10px;
	border-bottom-right-radius: 25px;
	position: relative;
	float: right;
	font-size: 20px;
	font-family: serif, sans-serif; 
	box-shadow: 1px 4px #676262;
	font-weight: bolder;
}
body{
	background-color: #168aee2e;
}
</style>

</head>

<body>
<div>
	<?php
      include 'header.php';
    ?>
<!-- this div will hold your store info -->
    <div id="info_div"></div>
<!-- this div will hold your map -->

<div id="map"></div>
<div>
	<a href="catalog.php?id=<?php echo$user_id?>" class="btn btn-default btn-lg" style="float: right; color: white; background-color: #820813">Continue Shopping </a>
	</div>
<script>
function initMap() {
	//var myMapCenter = {lat: 40.785091, lng: -73.968285};
	var myMapCenter = {lat: 27.7172, lng: 85.3240};
	// Create a map object and specify the DOM element for display.
	var map = new google.maps.Map(document.getElementById('map'), {
		center: myMapCenter,
		zoom: 14
	});


	function markStore(storeInfo){

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
			map: map,
			position: storeInfo.location,
			title: storeInfo.name
		});

		// show store info when marker is clicked
		marker.addListener('click', function(){
			showStoreInfo(storeInfo);
		});
	}

	// show store info in text box
	function showStoreInfo(storeInfo){
		var info_div = document.getElementById('info_div');
		info_div.innerHTML = 'Store name: '
			+ storeInfo.name
			+ '<br>Hours: ' + storeInfo.hours;
	}

	var stores = [
		{
			name: 'TeleShop Bhaktapur',
			location: {lat: 27.7025, lng: 85.3414},
			hours: '10AM to 10PM'
		},
		{
			name: 'TeleShop Kathmandu',
			location: {lat: 27.7172, lng: 85.3240},
			hours: '9AM to 9PM'
		}
	];

	stores.forEach(function(store){
		markStore(store);
	});

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEzNblM2iMm-R6Kge3qFTCFh9R_ZKurQs&callback=initMap" async defer></script>
<br><br><br>
           <?php
           	include 'footer.php';
           ?>
</div>
</body>
</html>