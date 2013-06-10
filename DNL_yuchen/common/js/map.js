var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(52.08335,5.147850000000062),
    disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);