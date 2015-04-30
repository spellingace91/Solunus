function reqListener() {
    console.log(this.responseText);
}

var oReq = new XMLHttpRequest(),
    time;
oReq.onload = function() {
    time = this.responseText;
}
oReq.open("get", "get-time.php", true);
oReq.send();

navigator.geolocation.getCurrentPosition(show_map);

function show_map(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    console.log("Latitude: " + latitude + ", longitude: " + longitude + " at " + time);

    var url = "https://maps.googleapis.com/maps/api/timezone/json?location=" + latitude + "," + longitude + "&timestamp=" + time + "&sensor=false";
        
    $.ajax({
		    type: 'GET',
		  	url: url,
		  	dataType: 'json',
		  	success: function(data) {
  		  	    calculateSunTimes(data, latitude, longitude);
                calculateMoonTimes(data, latitude, longitude);
  		    }
    });
    
    /* Gets and displays the city and state */
    url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude.toFixed(2) + ',' + longitude.toFixed(2) + '&sensor=false';
   	
  	$.ajax({
	  	type: 'GET',
	  	url: url,
	  	dataType: 'json',
	  	success: function(data) {
			$data = new Array();
			
			for (var i = 0; i < data.results[0].address_components.length; i++) {
				$data[data.results[0].address_components[i].types[0]] = data.results[0].address_components[i].long_name;
			}
			$('#fromip > h2').html($data['locality']);
			$('#fromip > h3').html($data['administrative_area_level_1']);
				
	  	}
  	});

}