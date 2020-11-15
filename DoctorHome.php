<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "doctor"){
    header("location: PatientHome.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Home</title>
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
				<li><a class="active" href="DoctorHome.php"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a></li>
				<li><a href="LogoutHandler.php">Log Out</a></li>
			</ul>
		</nav>

		<!--Content of Page-->
		<div class="parallax">
			<br><br><br><br><br><br>
			<h1>Welcome Dr. <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?>!</h1>
			<h3>What would you like to do?</h3>
			<br><br>
			<div class="docHomeButtons" align="center">
				<button class="button" onclick="window.open('https://my.setmore.com/calendar#weekly/r88971600744316499/05102020', '_blank'); return false;">View the Setmore Booking Page</button>
				<br><br><br>
				<button class="button" onclick="location.href='DoctorCreateSubscription.php'">Create a Subscription</button>
				<br><br><br>
				<button class="button" onclick="location.href='DoctorViewDrugsList.php'" target="_blank">View the Drug Inventory</button>
				<br><br><br>
				<button class="button" onclick="window.open('http://localhost:3000/', '_blank'); return false;">Start a Chat with a Patient</button>
				<br><br><br>
				<button class="button" onclick="location.href='UserSettingPage-Doctor.php'">Change Account Settings</button>
			</div>
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