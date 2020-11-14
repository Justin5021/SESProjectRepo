<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Emergencies</title>
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
				<li><a class="active" href="EmergenciesPage.php">Emergencies</a></li>
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
				<label id="epLbl"><b> Emergency Situation </b></label>
				<br><br>
				<label id="mpHText"><u><b> Advise: </b></u></label>
				<label id="mpText">
					<br>In an immediate emergency we suggset contacting 000 first A.S.A.P </label>
					<br><br>
				<label id="mpHText"><u><b> Methods we Offer: </b></u></label>
				<label id="mpText">
					<br><b>Urgent Cases:</b> <br>  
					We require you to <a href=LoginPage.php>sign in</a> with your account first or to create an account if you do not have one. Please click <a href="SignupUserTypePage.html">here to proceed</a>.</label>
					<br><br>
				<label id="mpHText"><u><b> Contact Details: </b></u></label>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345678 <br>
						<b> Emergency (24/7) Hotline </b> - 0412345909 <br>
						<b>Email</b> - telehealthsupport@tele.health.au <br>
						<b>Others</b> - Please refer to the <a href="ContactPage.php">Contact Us</a> page for more details.
						</label>
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