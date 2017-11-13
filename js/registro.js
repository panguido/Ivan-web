
 
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(9.748916999999999,-83.75342799999999),
          mapTypeId: 'roadmap'
        });

        var image = 'barberia/vector.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: 10.471755, lng: -84.641236},
    map: map,
    icon: image
  });
   var image = 'barberia/vector.png';
  var beachMarker = new google.maps.Marker({
    position: {lat:10.6222489, lng: -84.528004},
    map: map,
    icon: image
  });
        

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
