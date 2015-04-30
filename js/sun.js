function calculateSunTimes(data, latitude, longitude) {
    // calculate sun times
    var currTime = moment.unix(time);
    
    var dayOfYear = currTime.dayOfYear();
    var hour = currTime.hour();
    
    var timezone;
    
    var sin = function(arg) {
        return Math.sin(arg);
    };
    var cos = function(arg) {
        return Math.cos(arg);
    };
    var tan = function(arg) {
            return Math.tan(arg);
    };
    var pi = Math.PI;
    
    var fractionalYear = (2 * pi) / 365 * (dayOfYear - 1 + (hour - 12) / 24);
    
    
    var lngHour = longitude / 15;
    
    var riseSetTimes = [], 
        tRise = dayOfYear + ( ( 6 - lngHour ) / 24 ),
        tSet = dayOfYear + ( ( 18 - lngHour ) / 24 );
       
    riseSetTimes.push(tRise, tSet); 
    
    for(var i = 0; i < riseSetTimes.length; i++) {
        var m = (0.9856 * riseSetTimes[i]) - 3.289;
        
        var l = (m + ( 1.916 * sin( toRadians( m ) ) ) + ( 0.020 * sin( toRadians( 2 * m ) ) ) + 282.634);
        l = getInRange(l, 0, 360);
        
        var ra = toDegrees( Math.atan( 0.91764 * tan( toRadians( l ) ) ) );
        ra = getInRange(ra, 0, 360);
        
        var lQuadrant = ( Math.floor( l /90) ) * 90,
            raQuadrant = ( Math.floor( ra / 90 ) ) * 90;
        
        ra += lQuadrant - raQuadrant;
        
        ra /= 15;
        
        var sinDec = 0.39782 * sin( toRadians( l ) ),
            cosDec = cos( Math.asin( sinDec ) );
        
        var cosH = (cos( toRadians(90.833)) - (sinDec * sin( toRadians(latitude) )) / (cosDec * cos(toRadians(latitude))));
        
        if (i == 0) {
            var h = 360 - toDegrees(Math.acos(cosH));
        }
        else {
            var h = toDegrees(Math.acos(cosH));
        }
        
        h /= 15;
        
        var t = h + ra - (0.06571 * riseSetTimes[i]) - 6.622;
        
        var ut = t - lngHour;
        ut = getInRange(ut, 0, 24);
        
        var localT = ut + (data.dstOffset + data.rawOffset) / 3600;
		riseSetTimes[i] = formatTimes(localT);
		
		console.log(formatTimes(localT));
		
		
    }
    
    $(".sun .up h4").html(riseSetTimes[0]);
    $(".sun .down h4").html(riseSetTimes[1]);
}