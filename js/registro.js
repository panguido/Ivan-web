
 
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(9.748916999999999,-83.75342799999999),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            icon: iconBase + "../barberia/barP.png"
          },
          library: {
            icon: iconBase + 'library_maps.png'
          },
          info: {
            icon: iconBase +  'info-i_maps.png'
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(9.748916999999999 ,-83.75342799999999 ), 
            type: 'info'
          }, {
            position: new google.maps.LatLng(10.471755,-84.641236), 
            type: ' parking'
          }, {
            position: new google.maps.LatLng( 10.622248,-84.528004),
            type: 'library'
          }, {
            position: new google.maps.LatLng(10.375248,-84.341472),
            type: 'info'
          }
            
        ];
        var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'barberia/barP.png'
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
