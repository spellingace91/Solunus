<!DOCTYPE html>
<html lang="en" class="default">
	<head>
		<title>Solunus: sun and moon times by location</title>
	
		<meta charset="utf-8" />
		<meta name="description" content="Solunus gives you the times of the rising and setting of the moon and sun for your location in an easy-to-read format."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link rel="icon" type="image/ico" href="images/favicon.ico"/>
		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Buenard' rel='stylesheet' type='text/css'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
        <script src="js/solunus.main.min.js"></script>

		<!-- uncompressed CSS file found at css/style-index.css for those that wish to take a peek -->
		<link rel="stylesheet" type="text/css" href="css/solunus.min.css" />
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
							<div class="times">
								<div class="sun">
									<div class="up">
										<img src="images/sunrise.png"/>
										
										<h4>
										</h4>
									</div>
									<div class="down">
										<img src="images/sunset.png"/>
										
										<h4>
										</h4>
									</div>
								</div>	
								<div class="moon">
									<div class="up">
										<img src="images/moonrise.png"/>
									
										<h4>
										</h4>
									</div>
									<div class="down">
										<img src="images/moonset.png"/>
									
										<h4>
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
        <script>
			$.backstretch('images/thimblepeak.jpg');
		</script>
	</body>
</html>
