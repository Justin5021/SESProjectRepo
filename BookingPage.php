<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Bookings</title>
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
                <li><a href="PatientHome.php"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a></li>
		        <li><a href="LogoutHandler.php">Log Out</a></li>
            </ul>
        </nav>
        
		<div class="parallax">
			<br><br><br>
			<!--Setmore Booking Service Embed-->
			<iframe src="https://telehealth3623.setmore.com" scrolling="no" width="95%" height="88%" frameborder="0"></iframe>
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