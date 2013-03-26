<?php

include('moon.php');
include('helpers.php');

// instantiate a new Moon object
$moon = new Moon;
	
// Check to see if daylight savings time is in effect
$DST = true;
$remove_hour = strtotime("Second Sunday March 0");
$add_hour = strtotime("First Sunday November 0");
						
$time = time();
						
// if the current is between the second Sunday in March
// and the first Sunday in November, then $DST is set to true, 
// false otherwise
($time >= $remove_hour && $time < $add_hour) ? $DST : $DST = !$DST;


$userip = $_SERVER['REMOTE_ADDR'];

$jsonurl = 'http://api.ipinfodb.com/v3/ip-city/?key=e3568c04990ef827eeb0d2fcc8e8e55f64b175cda0f7686c187e7f3270ef7089&format=json&ip=' . $userip;
$json = file_get_contents($jsonurl, 0, null, null);
$json_output = json_decode($json);

$city = ucfirst(strtolower($json_output->cityName));
$state = $json_output->regionName;
$lat = $json_output->latitude;
$long = $json_output->longitude;
$timezone = intval($json_output->timeZone);

$rise_zenith = 90+(25/60);
$set_zenith = 90+(40/60);

// current time adjusted for the timezone
$offset = timeZone($json_output->timeZone);

$DST ? $offset++ : $offset;

function sunrise($lat, $long, $timezone, $DST) {	
	echo twentyFourToTwelve(date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, 90, $timezone + $DST));
}

function sunset($lat, $long, $timezone, $DST) {
	echo twentyFourToTwelve(date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, 90, $timezone + $DST));
}

function moonrise($moon, $lat, $long, $DST) {
	echo $moon->calculateMoonRise(date(n), date(j), date(Y), $lat, $long, $DST);
}

function moonset($moon, $lat, $long, $DST) {
	echo $moon->calculateMoonSet(date(n), date(j), date(Y), $lat, $long, $DST);
}
?>