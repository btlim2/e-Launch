$(document).ready(function()
{
    $("#service").val('Website Design');
});


function note_click(target)
{
        if(target.value=='')
        {
           //target.style.color="#B0B0B0";
            target.value="";
        }
        else if(target.value!= "")
        {
            //target.style.color="#000000";
            target.value="";
        }
}


$("#clear").click(function (){
    $("#autocomplete").val('');
    $("#service").val('');
})
        
$("#type_1").click(function (){
    $("#service").val('Website Design');
})
        
$("#type_2").click(function (){
    $("#service").val('Internet Service');
})
        
$("#type_3").click(function (){
    $("#service").val('Graphic Design');
})
        
$("#type_4").click(function (){
    $("#service").val('Postal');
})
    
$("#type_5").click(function (){
    $("#service").val('Advertisement');
})
        
$("#type_6").click(function (){
    $("#service").val('Insurance');
})
        
$("#type_7").click(function (){
    $("#service").val('Council Permits');
})
        
$("#type_8").click(function (){
    $("#service").val('Legal Service');
});


// This example uses the autocomplete feature of the Google Places API.
// It allows the user to find all hotels in a given place, within a given
// country. It then displays markers for all the hotels returned,
// with on-click details for each hotel.

var map, places, infoWindow;
var markers = [];
var autocomplete;
var countryRestrict = {'country': 'au'};
var MARKER_PATH = 'https://maps.gstatic.com/intl/en_us/mapfiles/marker_green';
var hostnameRegexp = new RegExp('^https?://.+?/');

var countries = {
  'au': {
    center: {lat: -25.3, lng: 133.8},
    zoom: 4
  },
};

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    //zoom: countries['au'].zoom,
    zoom:12,
    center: {lat:-37.822922,lng:144.958736},
    mapTypeControl: false,
    panControl: false,
    zoomControl: false,
    streetViewControl: false
  });

  infoWindow = new google.maps.InfoWindow({
    content: document.getElementById('info-content')
  });

  // Create the autocomplete object and associate it with the UI input control.
  // Restrict the search to the default country, and to place type "cities".
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */ (
          document.getElementById('autocomplete')), {
        types: ['(regions)'],
        componentRestrictions: countryRestrict
      });
  places = new google.maps.places.PlacesService(map);

autocomplete.addListener('place_changed', onPlaceChanged);


// Add a DOM event listener to react when the user selects a country.
document.getElementById('country').addEventListener(
      'change', setAutocompleteCountry);
}

// When the user selects a city, get the place details for the city and
// zoom the map in on the city.
$(document).ready(function()
  {
      $("#map").animate({width:"inherit"});
});

function onPlaceChanged() {
  var ser = $("#service").val();
  var autoCom = $("#autocomplete").val();
  if(ser != "" && autoCom !=""){
      $("#sectionMap").removeClass("col-lg-12");
      $("#sectionMap").addClass("col-lg-6");
      $("#sectionListing").removeClass("col-lg-0");
      $("#sectionListing").addClass("col-lg-6");
      $("#listing").animate({width:"100%"});
      $("#map").animate({width:"100%"})
  }

var place = autocomplete.getPlace();
if (place.geometry) {  
  map.panTo(place.geometry.location);
  map.setZoom(13);

  search();
} else {
  document.getElementById('autocomplete').placeholder = 'Enter a regions';
  }
}

// Search for hotels in the selected city, within the viewport of the map.

function search() {
  var search = {
    bounds: map.getBounds(),
    keyword:document.getElementById('service').value
  };
  
  places.nearbySearch(search, function(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      clearResults();
      clearMarkers();
      // Create a marker for each hotel found, and
      // assign a letter of the alphabetic to each marker icon.
      if(results.length == 0)
      {console.log("no");}
      for (var i = 0; i < results.length; i++) {
        var markerLetter = String.fromCharCode('A'.charCodeAt(0) + i);
        var markerIcon = MARKER_PATH + markerLetter + '.png';
        // Use marker animation to drop the icons incrementally on the map.
        markers[i] = new google.maps.Marker({
          position: results[i].geometry.location,
          animation: google.maps.Animation.DROP,
          icon: markerIcon
        });
        // If the user clicks a hotel marker, show the details of that hotel
        // in an info window.
        markers[i].placeResult = results[i];
        google.maps.event.addListener(markers[i], 'click', showInfoWindow);
        setTimeout(dropMarker(i), i * 100);
        var iconTd1 = document.createElement('td');
        var nameTd1 = document.createElement('td');
        addResult(results[i], i);
      }
    }
  });
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    if (markers[i]) {
      markers[i].setMap(null);
    }
  }
  markers = [];
}

// [START region_setcountry]
// Set the country restriction based on user input.
// Also center and zoom the map on the given country.
function setAutocompleteCountry() {
  var country = document.getElementById('country').value;
  if (country == 'all') {
    autocomplete.setComponentRestrictions([]);
    map.setCenter({lat: 15, lng: 0});
    map.setZoom(2);
  } else {
    autocomplete.setComponentRestrictions({'country': country});
    map.setCenter(countries[country].center);
    map.setZoom(countries[country].zoom);
  }
  clearResults();
  clearMarkers();
}
// [END region_setcountry]

function dropMarker(i) {
  return function() {
    markers[i].setMap(map);
  };
}





function clearResults() {
  var results = document.getElementById('results');
  while (results.childNodes[0]) {
    results.removeChild(results.childNodes[0]);
  }
}

// Get the place details for a service. Show the information in an info window,
// anchored on the marker for the service that the user selected.
function showInfoWindow() {
  var marker = this;
  places.getDetails({placeId: marker.placeResult.place_id},
      function(place, status) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
          return;
        }
        infoWindow.open(map, marker);
        buildIWContent(place);
      });
}

// Load the place information into the HTML elements used by the info window.
function buildIWContent(place) {
  document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
      'src="' + place.icon + '"/>';
  document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
      '">' + place.name + '</a></b>';
  document.getElementById('iw-address').textContent = place.vicinity;

  if (place.formatted_phone_number) {
    document.getElementById('iw-phone-row').style.display = '';
    document.getElementById('iw-phone').textContent =
        place.formatted_phone_number;
  } else {
    document.getElementById('iw-phone-row').style.display = 'none';
  }

  // Assign a five-star rating to the hotel, using a black star ('&#10029;')
  // to indicate the rating the hotel has earned, and a white star ('&#10025;')
  // for the rating points not achieved.
  if (place.rating) {
    var ratingHtml = '';
    for (var i = 0; i < 5; i++) {
      if (place.rating < (i + 0.5)) {
        ratingHtml += '&#10025;';
      } else {
        ratingHtml += '&#10029;';
      }
    document.getElementById('iw-rating-row').style.display = '';
    document.getElementById('iw-rating').innerHTML = ratingHtml;
    }
  } else {
    document.getElementById('iw-rating-row').style.display = 'none';
  }

  // The regexp isolates the first part of the URL (domain plus subdomain)
  // to give a short URL for displaying in the info window.
  if (place.website) {
    var fullUrl = place.website;
    var website = hostnameRegexp.exec(place.website);
    if (website === null) {
      website = 'http://' + place.website + '/';
      fullUrl = website;
    }
    document.getElementById('iw-website-row').style.display = '';
    document.getElementById('iw-website').textContent = website;
  } else {
    document.getElementById('iw-website-row').style.display = 'none';
  }
}

