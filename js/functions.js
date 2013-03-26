$(document).ready(function() {
	$('#top-places li a').click(function(e) {
		var toShow = this.id.substr(this.id.length - 1);
		if (toShow === 1) {
			$.backstretch('images/DSC_0004.jpg');
			/*
$.backstretch([
				"../images/DSC_0004.jpg"
			,	"../images/blacksburg_drillfield_sunset.jpg"
			,	"../images/DSC_0037.jpg"
			,	"../images/DSC_0064.jpg"], {duration: 3000, fade: 750});
*/
		}
		$('div.city:visible').fadeOut(0, function() {
			$('#city-' + toShow).fadeIn(0);
		});
	})
});

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