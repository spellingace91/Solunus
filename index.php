<!DOCTYPE html>
<html lang="en" class="default">
	<head>
		<title>Solunus: sun and moon times by location</title>
	
		<meta charset="utf-8" />
		<meta name="description" content="Solunus gives you the times of the sunrise, sunset, moonrise, and moonset for your location."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link rel="icon" type="image/ico" href="images/favicon.ico"/>
		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Buenard' rel='stylesheet' type='text/css'>

		<!-- uncompressed CSS file found at css/style-index.css for those that wish to take a peek -->
		<link rel="stylesheet" href="css/style-index.min.css" />

		<?php
			include('includes/setup.php');
		?>
	</head>
	<body>
		<div id="wrapper">
			<div class="container" id="container-header">
				<header id="header">
					<div id="nav">
						<div class="grid">
							<a href=".">
								<h1 id="soluna">Solunus</h1>
							</a>
						</div>
						
						<ul>
							<li>
								<a href="about.php">About</a>
							</li>
						</ul>
					</div>
				</header>
			</div>
			
			<section class="clearfix">
				<div class="container">
					<div id="times-info">
						<div id="fromip" class="city">
							<h2><?php echo $city ?></h2>
							<h3><?php echo $state ?></h3>
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
											<?php						
												sunrise($lat, $long, $timezone, $DST);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
											<?php
												sunset($lat, $long, $timezone, $DST);
											?>
										</h4>
									</div>
								</div>	
								<div class="moon">
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
											<?php
												moonrise($moon, $lat, $long, $DST);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
									
										<h4>
											<?php
												moonset($moon, $lat, $long, $DST);
											?>
										</h4>
									</div>
								</div>
							</div>
						</div>
						
						<div id="city-1" class="city">
							<h2>Blacksburg</h2>
							<h3>Virginia</h3>
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
											<?php									
												echo twentyFourToTwelve($DST ? date_sunrise(time(), SUNFUNCS_RET_STRING, 37.2, -80.4, 90, -4) : date_sunrise(time(), SUNFUNCS_RET_STRING, 37.2, -80.4, 90, -5));
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
											<?php
												echo twentyFourToTwelve($DST ? date_sunset(time(), SUNFUNCS_RET_STRING, 37.2, -80.4, 90, -4) : date_sunset(time(), SUNFUNCS_RET_STRING, 37.2, -80.4, 90, -5));
											?>
										</h4>
									</div>
								</div>	
								<div class="moon"></div>
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
											<?php
												echo $moon->calculateMoonRise(date(n), date(j), date(Y), 37.2, -80.4, $DST);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
									
										<h4>
											<?php
												echo $moon->calculateMoonSet(date(n), date(j), date(Y), 37.2, -80.4, $DST);
											?>
										</h4>
									</div>
							</div>
						</div>

						<div id="city-2" class="city">
							<h2>Wind Rock</h2>
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
											<?php
												// display the converted (to 12-hour time) result of the built-in sunrise PHP function,
												// returning values an hour apart depending on whether DST is in effect.							
												echo twentyFourToTwelve($DST ? date_sunrise(time(), SUNFUNCS_RET_STRING, 37.414292, -80.516728, 90, -4) : date_sunrise(time(), SUNFUNCS_RET_STRING, 37.414292, -80.516728, 90, -5));
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
											<?php
												// display the converted (to 12-hour time) result of the built-in sunset PHP function,
												// returning values an hour apart depending on whether DST is in effect.
												echo twentyFourToTwelve($DST ? date_sunset(time(), SUNFUNCS_RET_STRING, 37.414299, -80.519295, 90, -4) : date_sunset(time(), SUNFUNCS_RET_STRING, 37.414292, -80.516728, 90, -5));
											?>
										</h4>
									</div>
								</div>	
								<div class="moon">
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
											<?php
												// display the result of the moonrise calculation function of the moon object,
												// taking in a day, month, year, latitude, longitude, and DST boolean.
												echo $moon->calculateMoonRise(date(n), date(j), date(Y), 37.414292, -80.516728, $DST);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
									
										<h4>
											<?php
												// display the result of the moonset calculation function of the moon object,
												// taking in a day, month, year, latitude, longitude, and DST boolean.
												echo $moon->calculateMoonSet(date(n), date(j), date(Y), 37.414292, -80.516728, $DST);
											?>
										</h4>
									</div>
								</div>
							</div>
						</div>

						<div id="city-3" class="city">
							<h2>Roanoke</h2>
							<h3>Virginia</h3>
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
											<?php									
												echo twentyFourToTwelve($DST ? date_sunrise(time(), SUNFUNCS_RET_STRING, 37.3, -79.9, 90, -4) : date_sunrise(time(), SUNFUNCS_RET_STRING, 37.3, -79.9, 90, -5));
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
											<?php
												echo twentyFourToTwelve($DST ? date_sunset(time(), SUNFUNCS_RET_STRING, 37.3, -79.9, 90, -4) : date_sunset(time(), SUNFUNCS_RET_STRING, 37.3, -79.9, 90, -5));
											?>
										</h4>
									</div>
								</div>	
								<div class="moon"></div>
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
											<?php
												echo $moon->calculateMoonRise(date(n), date(j), date(Y), 37.3, -79.9, $DST);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
										
										<h4>
											<?php
												echo $moon->calculateMoonSet(date(n), date(j), date(Y), 37.3, -79.9, $DST);
											?>
										</h4>
									</div>
							</div>
						</div>

						<div id="city-4" class="city">
							<h2>Tucson</h2>
							<h3>Arizona</h3>
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
											<?php
												// display the converted (to 12-hour time) result of the built-in sunrise PHP function,
												// returning values an hour apart depending on whether DST is in effect.							
												echo twentyFourToTwelve(date_sunrise(time(), SUNFUNCS_RET_STRING, 32.22166666666667, -110.9263888888889, 90, -7));
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
											<?php
												// display the converted (to 12-hour time) result of the built-in sunset PHP function,
												// returning values an hour apart depending on whether DST is in effect.
												echo twentyFourToTwelve(date_sunset(time(), SUNFUNCS_RET_STRING, 32.22166666666667, -110.9263888888889, 90, -7));
											?>
										</h4>
									</div>
								</div>	
								<div class="moon">
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
											<?php
												// display the result of the moonrise calculation function of the moon object,
												// taking in a day, month, year, latitude, longitude, and DST boolean.
												echo $moon->calculateMoonRise(date(n), date(j), date(Y), 32.22166666666667, -110.9263888888889, 0);
											?>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
									
										<h4>
											<?php
												// display the result of the moonset calculation function of the moon object,
												// taking in a day, month, year, latitude, longitude, and DST boolean.
												echo $moon->calculateMoonSet(date(n), date(j), date(Y), 32.22166666666667, -110.9263888888889, 0);
											?>
										</h4>
									</div>
								</div>
							</div>
						</div>

				
					</div>
				</div>
			</section>
			
			<?php include('includes/footer.php'); ?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script src="js/functions.js"></script>
		<script>
			$.backstretch('images/parkway_sunset.jpg');
		</script>
	</body>
</html>