<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>TeleHealth</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
	</head>

	<body>
		<!-- Navigation Menu -->
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"> </i>
			</label>
			<label class="title"> TeleHealth </label>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="AboutPage.php">About</a></li>
				<li><a href="EmergenciesPage.php">Emergencies</a></li>
				<?php
				if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
				{	
					echo '<li><a href="LoginPage.php">Log In</a></li>';
					echo '<li><a href="SignupUserTypePage.html">Sign Up</a></li>';
				}
				else
				{
					echo '<li><a href="DoctorHome.php">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a></li>';
					echo '<li><a href="LogoutHandler.php">Log Out</a></li>';
				}
				?>
			</ul>
		</nav>

		<!--Content of Page-->
		<div class="parallax">
		<br><br><br><br>	
			<form class="mpForm" id="landingPForm" align="justify">
				<label id="mpLbl"><b> Welcome to Telehealth!  </b></label>
				<hr>
				<br>
				<label id="mpText"> 
					As one of the best Healthcare Service Providers in the market, TeleHealth is the embodiement of proven expertise! 
					Boasting medical personnel and doctors from different disciplines and varying tecniques all for you! <br> 
					Our service understands the importance of our customers well-being and thus we take every situation very seriously with detailed
					yet simple procedures for you to follow. We do not discriminate our patients and our medical team will treat you with the
					utmost respect.
					<br>
					It does not matter if we are dealing with the elderly, the disabled or people affected by the coronavirus 
					as our service supports various selectable consultation modes through the website during the booking process.
					<br><br>
					Our ultimate goal is to revolutionize TeleHealth as a better healthcare system.
					<br><br>
					Join us today! By clicking on this <a href="SignupUserTypePage.html">link!</a>
					<br><br>
					Have a question? Feel free to contact us <a href=ContactPage.php>here! </a>
				</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a href="FAQPage.php">FAQ</a>
			<a href="ContactPage.php">Contact Us</a>
			<a href="ServicesPage.php">Services</a>
			<a href="CreditPage.php">Credits</a>
			<a class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

	</body>

</html>