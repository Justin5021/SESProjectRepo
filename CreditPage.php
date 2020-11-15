<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Credits</title>
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
				<li><a href="index.php">Home</a></li>
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
			<form class="mpForm" align="center">
				<label id="creditspLbl"><b> Software Engineering Studio 1A  </b></label>
				<br><br>
				<label id="creditsSLbl"><b> Group 2's Members  </b></label>
				<br><br><br><br>
				<label id="mpText"> 
					Jacob Rochecouste - Project Leader and Scrum Master
					<br><br>
					Justin Chin Wei Kit - Developer
					<br><br>
					Ivan David - Developer
					<br><br>
					Richie Nguyen - Developer
					<br><br>
					William Susanto - Documentation
				</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" class="active" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 		
	</body>

</html>