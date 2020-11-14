<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>About</title>
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
				<li><a class ="active" href="AboutPage.php">About</a></li>
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
				<label id="apLbl"><b> About Us  </b></label>
				<br><br>
				<label id="mpHText"> <u><b>Our Vision:</b></u> </label>
				<label id="mpText">
					<br>To ensure that medical help is available anytime, anywhere in the world. </label>
					<br><br>
				<label id="mpHText"> 
					<u><b>Our Mission:</b></u> </label>
				<label id="mpText">
					<br>To give people in faraway areas hope for an improved medical system through online consultations, appointments and prescriptions for medicine. </label>
					<br><br>
				<label id="mpHText"> 
					<u><b>Additional Info:</b></u> </label>
					<br>
				<label id="mpText">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis turpis, vulputate quis placerat nec, pellentesque at lectus. Curabitur mattis dui mi, nec viverra velit rutrum quis. Mauris eget leo massa. Donec rutrum lectus nec diam suscipit pretium. Aenean auctor justo arcu, ut congue quam ultrices quis. Duis accumsan nisl at lectus lacinia porta. Integer at fermentum nisl. In aliquam semper efficitur. Nam nec velit lobortis, accumsan nibh id, accumsan nisi. Morbi at orci fermentum, aliquam eros non, sollicitudin turpis.

					Mauris semper eleifend ante et iaculis. In pulvinar id ex et pretium. Nam placerat ante blandit, congue massa a, aliquam felis. Cras dignissim massa ut rutrum maximus. Duis ut accumsan mauris. Vestibulum elementum purus nec dolor fermentum, ornare tempor quam ornare. Nam elementum accumsan efficitur.
				</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

	<body>

</html>