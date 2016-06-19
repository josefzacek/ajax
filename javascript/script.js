$(document).ready(function(){
	// load index page
	$('.wrapper').load('pages/index.php');

	// linking pages
  $('nav .navbar-header a').on('click', navigate);
	$('nav ul li a').on('click', navigate);

	function navigate(e) {
		e.preventDefault();
		var page = $(this).attr('href');
		$('.wrapper').load('pages/'+ page +'.php');
	};
  
});

// google map
function initMap() {
  var myLatlng = new google.maps.LatLng(53.349838,-6.260204);   // latitude/longitude  
  var mapOptions = {
    zoom: 13,                         // higher number => closer
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    streetViewControl: false,                   // remove street view icon
    mapTypeControl: false                      // remove map type tabs
  }

  var map = new google.maps.Map(document.getElementById('google-map-canvas'), mapOptions); 
  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    animation: google.maps.Animation.DROP,
    title: 'Dublin, capital of the Republic of Ireland'  // title when hovered over marker
  });

  // click on marker to open url in new tab
  google.maps.event.addListener(marker, 'click', function() {
    window.open('http://www.dublincity.ie/','_blank');
  });
  
  // code from stack overflow to keep marker in middle
  var center;
  function calculateCenter() {
    center = map.getCenter();
  }
  google.maps.event.addDomListener(map, 'idle', function() {
    calculateCenter();
  });
  google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(center);
  });
}
