<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "patient"){
    header("location: DoctorHome.php");
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
                <li><a id="patHome" class="active" href="PatientHome.php"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a></li>
		        <li><a id="logoutLink" href="LogoutHandler.php">Log Out</a></li>
            </ul>
        </nav>

        <div class="parallax">
            <br><br><br><br><br><br>
            <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?>!</h1>
            <h3>What would you like to do?</h3>
            <br><br>
            <div class="patHomeButtons" align="center">
                <button class="button" onclick=" window.open('LocationsPage.php', '_blank'); return false;">Find Clinics Near Me</button>
                <br><br><br>
                <button class="button" onclick="location.href='BookingPage.php'">Make a Booking</button>
                <br><br><br>
                <button class="button" onclick="location.href='PatientViewSubscription.php'">View your Medical Reports</button>
                <br><br><br>
                <button class="button" onclick="window.open('http://localhost:3000/', '_blank'); return false;">Start a Chat with a Doctor</button>
                <br><br><br>
                <button class="button" onclick="location.href='EnquiryPage.php'">Make an Enquiry</button>
                <br><br><br>
                <button class="button" onclick="location.href='UserSettingPage-Patient.php'">Change Account Settings</button>
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