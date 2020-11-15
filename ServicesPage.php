<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Services</title>
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
			<form class="mpForm" id="landingPForm" align="justify">
				<label id="spLbl"><b> Provided Services  </b></label>
				<br><br>
				<label id="mpHText"><u><b> Healthcare: </b></u></label>
				<label id="mpText">
					<br>We direct you to the quality healthcare services you deserve. </label>
					<br><br>
				<label id="mpHText"><u><b> Online Consultations: </b></u></label>
				<label id="mpText">
					<br>Find a doctor to communicate with anytime, anywhere. </label>
					<br><br>
				<label id="mpHText"><u><b> Support Team: </b></u></label>
				<label id="mpText">
					<br>Need a question answered? Something you don't understand? <br>
					Our amazing on demand support team can be found <a href="ContactPage.php">here!</a> </label>
					<br><br>
				<label id="mpHText"><u><b> Urgent Consultations: </b></u></label>
				<label id="mpText">
					<br> Need help urgently? Book an appointment immediately with one of our dedicated doctors. </label>
					<br><br>
			</form>
		</div>
		
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 	
	</body>

</html>