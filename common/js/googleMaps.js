/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function initialize()
{
    var mapProp = {
        center: new google.maps.LatLng(52.09179, 5.11457),
        zoom: 13,
        panControl: false,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        mapTypeControl: true,
        scaleControl: false,
        streetViewControl: true,
        overviewMapControl: false,
        rotateControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
		draggable: false, 
        scrollwheel: false, 
        disableDoubleClickZoom: true
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);