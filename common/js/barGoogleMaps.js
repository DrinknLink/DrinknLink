/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function initialize()
{
    var mapProp = {
        center: new google.maps.LatLng(52.09151, 5.11457),
        zoom: 17,
        panControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        rotateControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: false,
        scrollwheel: false,
        disableDoubleClickZoom: true
    };
    var map = new google.maps.Map(document.getElementById("barGoogleMap"), mapProp);
    
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(52.09151, 5.11457),
        map: map,
        title: 'The Pegasus Pub!'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);