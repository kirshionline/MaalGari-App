<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script 
    src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">
    </script>


  	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 800px;
      		height: 500px;
    	}
  	</style>


</head>
<body>




  <div id="mymap"></div>
  

  <?php //print_r($locations) ?>

  <script type="text/javascript">


var locations = <?php print_r(json_encode($locations)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:6
    });




    $.each(locations, function( index, value ){

      alert(value.lat);
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng, 
	      title: value.city,
	      click: function(e) {
	        alert('This is '+value.city+', gujarat from India.');
	      }
	    });
   });


  </script>


</body>
</html>
