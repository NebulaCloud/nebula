<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBttBRgSYfK-K-BLFEX2ThGcVK8gC52WFQ&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(27.93145, -82.326867),
          zoom: 14
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
         //Add marker
         var image = '/img/sample.jpg';
  var myLatLng = new google.maps.LatLng(27.93145, -82.326867);
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
    <div id="map-canvas"/>
