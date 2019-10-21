<?php include "include/header.php" ?>

	
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        max-height: 900px;
        min-height: 500px;
        width: 100%;
      }
    </style>
	
	
<link rel="stylesheet" href="jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.modally.js"></script>

<body>
<div class="page-wrapper">
<div class="preloader"></div>
<?php include "include/menu.php" ?>
<?php include "include/slide.php" ?>
<?php include "include/pontos_index.php" ?>


</div>






<!--Scroll para topo-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>



<div id="mapa">
   <section class="product-details"><div id="map"></div>
          
        </section>
                </div>








<?php include "include/rodape.php"?>
<?php include "include/footer.php" ?>


<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: -31.024, lng: 147.887}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: -31.563910, lng: 147.154312},
        {lat: -31.718234, lng: 147.363181},
        {lat: -31.727111, lng: 147.371124},
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB65wQ-8omotIc_yeccY8ZFDmq87DR1xi8&callback=initMap">
    </script>
        
    

</body>
</html>