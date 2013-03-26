<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About | Solunus: sun and moon times by location</title>
	
		<meta charset="utf-8" />
		<meta name="description" content="ADD CONTENT HERE"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link rel="icon" type="image/ico" href="images/favicon.ico"/>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Buenard' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="css/style-about.css" />
	</head>
	<body>
		<div id="wrapper">
			<div class="container">
				<header id="header">
					<div id="nav">
						<div class="grid">
							<a href=".">
								<h1 id="solunus">Solunus</h1>
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
					<h2>About</h2>
					
					<p>
					Ever wanted to watch a beautiful sunset, or the full moon loom over the horizon at its rising, but missed it because you didn't know what time it happened?
					</p>
					<p>
						Enter Solunus.
					</p>
					<p>
						Solunus gives you times for the sunrise, sunset, moonrise, and moonset for the current day in your city, all in a clean, easy-to-read format.
					</p>
					<p>
						It works great wherever you're connected to Wi-Fi on your computer or devices, with more precise locations for mobile devices coming soon. Times are also available for some top places, no matter where you are.
					</p>
					<p id="home">
						<a href="index.php">Home</a>
					</p>
				</div>
			</section>
			
			<?php include('includes/footer-about.php'); ?>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script src="js/modal.popup.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script src="js/functions.js"></script>
		<script>
			$.backstretch('images/pricesforksunset.jpg');
		</script>
	</body>
</html>