<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Contacts</title>
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
		<div class="parallax" style="height: 105%;">
			<br><br><br><br>	
			<form class="mpForm" id="landingPForm" align="center">
				
				<label id="cpLbl"><b> Contacts List </b></label>
				<br>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345678 <br>
						<b> Emergency (24/7) Hotline </b> - 0412345909 <br>
						<b>Email</b> - telehealthsupport@tele.health.au <br>
					</label>
					<br><br>
				<label id="mpHText"> <u><b>Developer Specific</b></u> </label>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345679 <br>
						<b>Email</b> - telehealthdev@tele.health.au <br>
					</label>
					<br><br>
				<label id="mpHText"> <u><b>Where to to find us?</b></u> </label> <br><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3312.232515169314!2d151.1981017!3d-33.8836651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aa7383337c73213!2sUTS%20Faculty%20of%20Engineering%20and%20IT!5e0!3m2!1sen!2sau!4v1588215213583!5m2!1sen!2sau" width="400px" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<br><br>
				<label id="mpHText"> <u><b> Contact a Doctor</b></u> </label>
				<label id="mpText">
					<br>If you want to speak to a doctor, <br> please <a href="SignupUserTypePage.html">sign up</a> or <a href="LoginPage.php">log in</a> <br> to the website and book an appointment.
					</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
			<a id="contactLink" class="active" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
	</body>

</html>