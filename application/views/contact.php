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
    
      google.maps.event.addDomListener(window, 'load', initialize);
      
      function initialize() {
		  var myLatlng = new google.maps.LatLng(27.93170, -82.326499);
		  var mapOptions = {
		    zoom: 14,
		    center: myLatlng
		  };
		
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		
		  var contentString = '<div id="content">'+
		      '<div id="siteNotice">'+
		      '</div>'+
		      '<h1 id="firstHeading" class="firstHeading">Ryuu</h1>'+
		      '<div id="bodyContent">'+
		      '<p>Blah Blah BlahBlah Blah BlahBlah Blah BlahBlah Blah BlahBlah Blah BlahBlah Blah Blah'+
		      '</p>'+
		      '</div>'+
		      '</div>';
		
		  var infowindow = new google.maps.InfoWindow({
		      content: contentString
		  });
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Ryuu'
		  });
		  google.maps.event.addListener(marker, 'click', function() {
		    infowindow.open(map,marker);
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    

  <div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-8 map-height margin-top-50px">
          <div id="map-canvas"></div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 contact-height margin-top-50px bg-burlywood">
          <img class="img-circle" src="/img/menu_140.jpg" alt="Generic placeholder image">
          <h2>Contact Us</h2>
		  <p>Call us at 123-456-7890</p>
		  <p>or give us your feedback below</p>
          <p>
          <div class="input-group">
			  <input type="text" class="form-control margin-bottom-10px" placeholder="Name*">
			  <input type="text" class="form-control margin-bottom-10px" placeholder="Email*">
			  <textarea type="text" class="form-control margin-bottom-10px" placeholder="Message*"></textarea>
		  </div>
		  <button type="button" class="btn btn-primary">Submit</button>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
 </div>    