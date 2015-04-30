function toRadians(angle) {
    return angle * (Math.PI / 180);
}

function toDegrees(angle) {
    return angle * (180 / Math.PI);
}

function getInRange(value, lowerRange, upperRange) {
    if (value < lowerRange) {
        value += upperRange;
    }
    else if (value > upperRange) {
        value -= upperRange;
    }
    
    return value
}


function formatTimes(time) {
    if (time < 0) {
     time = 24 + time;
    }
    
    var hours = Math.floor(time),
        twelveHours = hours === 0 ? 12 : hours % 12,
        minutes = pad( Math.floor((time % 1) * 60), 2 ),
        meridian  = hours > 12 ? "pm" : "am";
        
    return twelveHours + ":" + minutes + " " + meridian;
}

function pad( n, width, z ) {
     z = z || "0";
     n = n + '';
     return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

$(document).ready(function() {
            
		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 200; 											//Use an integer (in pixels)
		var width = 500; 										//Use an integer (in pixels)
		var padding = 15;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = './privacy.html'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
		var borderColor = '#222222'; 							//Use any hex code
		var borderWeight = 4; 									//Use an integer (in pixels)
		var borderRadius = 5; 									//Use an integer (in pixels)
		var fadeOutTime = 300; 									//Use any integer, 0 = no fade
		var disableColor = '#666666'; 							//Use any hex code
		var disableOpacity = 80; //40								//Valid range 0-100
		var loadingImage = './images/loading.gif';		//Use relative path from this page
			
		//This method initialises the modal popup
        $(".modal").click(function() {
            modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
        });
		
		//This method hides the popup when the escape key is pressed
		$(document).keyup(function(e) {
			if (e.keyCode == 27) {
				closePopup(fadeOutTime);
			}
		});
		
});