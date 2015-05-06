<?php
include 'includes/header.php';
include 'includes/nav.php';
?>
<div id="main">
	<header class="container">
		<h3 class="page-header">Contact</h3>
	</header>
	<div class="container">
		<div class="row">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">http://www.map-embed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(28.5466,77.27158629999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.5466, 77.27158629999997)});infowindow = new google.maps.InfoWindow({content:"<b>Team Garudwar</b><br/>GB Pant Engineering College, New Delhi<br/>110020 New Delhi" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	</div>
</div>
<?php
include 'includes/footer.php';
?>