@extends('layouts.app')
@section('content')
<section class="content-header">
   <h1>Passenger Booking Stats on Map<small></small></h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><i class="fa fa-map"></i> Stats on Map </li>
      <li class="active"><i class="fa fa-map"></i> Booking Stats </li>
   </ol>
</section>
<section class="content">
   <?php// print_r(json_encode($output)) ?>     
   <div id="map" style="width: 100%; height: 450px; margin-top: 30px;" ></div>
   <script type="text/javascript">
      function initMap() {


         //  console.log(locations);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: new google.maps.LatLng(13.0504918, 80.21899909999999),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        })
      
        var infowindow = new google.maps.InfoWindow({})
        var locations =  <?php print_r(json_encode($output)) ?> 
      
        var marker, i
        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            icon: 'https://img.icons8.com/color/30/000000/van.png',
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
          })
          google.maps.event.addListener(
            marker,
            'click',
            (function(marker, i) {
              return function() {
                infowindow.setContent(locations[i][0])
                infowindow.open(map, marker)
              }
            })(marker, i)
          )
        }

         // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#89bace',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#89bace',
            fillOpacity: 0.35,
            map: map,
            center: {lat: 13.0504918, lng:80.21899909999999},
            radius: Math.sqrt(2714856) *3
          });


        


      }
      
      
          
   </script>
</section>
<script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf5n1byqs9ePTJ3xJA3UuO0490tYFZ7qE&callback=initMap"></script>
@endsection