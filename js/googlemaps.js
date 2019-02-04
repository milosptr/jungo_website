var position = [44.812917, 20.466126];

function showGoogleMaps() {

  var latLng = new google.maps.LatLng(position[0], position[1]);
  console.log(window.innerWidth);
  if (window.innerWidth > 768)
    var mapCenter = new google.maps.LatLng(44.809182, 20.4771422);
  else
    var mapCenter = latLng;

  var style = [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#dadada"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#c9c9c9"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    }
  ];

  var mapOptions = {
    zoom: 16, // initialize zoom level - the max value is 21
    streetViewControl: false, // hide the yellow Street View pegman
    scaleControl: true, // allow users to zoom the Google Map
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: mapCenter,
    styles: style
  };

  map = new google.maps.Map(document.getElementById('googlemaps'),
    mapOptions);

  var image = {
    url: 'images/icons/map-marker.svg',
    size: new google.maps.Size(68, 82),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(34, 80),
    scaledSize: new google.maps.Size(68, 82)
  };

  // Show the default red marker at the location
  marker = new google.maps.Marker({
    position: latLng,
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    icon: image
  });



}

google.maps.event.addDomListener(window, 'load', showGoogleMaps);