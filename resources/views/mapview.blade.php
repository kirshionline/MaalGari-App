
@extends('layouts.app')

@section('content')

    <section class="content-header">
                <h1>Passenger Booking Stats on Map<small></small></h1>
                <ol class="breadcrumb">    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><i class="fa fa-map"></i> Stats on Map </li>
                <li class="active"><i class="fa fa-map"></i> Booking Stats </li>
              </ol>
    </section>
<section class="content">
               
 <div id="map" style="width: 100%; height: 450px; margin-top: 30px;" ></div>

    <script type="text/javascript">

function initMap() {
  var broadway = {
    info:
      '<strong>Chipotle on Broadway</strong><br>\
      5224 N Broadway St<br> Chicago, IL 60640<br>\
      <a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
    lat: 41.976816,
    long: -87.659916,
  }

  var belmont = {
    info:
      '<strong>Chipotle on Belmont</strong><br>\
      1025 W Belmont Ave<br> Chicago, IL 60657<br>\
      <a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
    lat: 41.93967,
    long: -87.655167,
  }

  var sheridan = {
    info:
      '<strong>Chipotle on Sheridan</strong><br>\r\
      6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
      <a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
    lat: 42.002707,
    long: -87.661236,
  }

  var locations = [
    [broadway.info, broadway.lat, broadway.long, 0],
    [belmont.info, belmont.lat, belmont.long, 1],
    [sheridan.info, sheridan.lat, sheridan.long, 2],
  ]

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: new google.maps.LatLng(41.976816, -87.659916),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  })

  var infowindow = new google.maps.InfoWindow({})

  var marker, i

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
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
}
    </script>
</section>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf5n1byqs9ePTJ3xJA3UuO0490tYFZ7qE&callback=initMap">
    </script>




@endsection