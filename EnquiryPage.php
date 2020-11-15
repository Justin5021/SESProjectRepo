<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Enquiry</title>
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
        <div class="parallax" style="height: 102%;">
		<br><br><br><br>
			<div class="enquiryPage">
				<form class="enquiryForm" method="get" action="EnquiryPage-Handler.php" align="justify">
					<label id="enquiryLbl"><b> Enquiry Form </b> </label>
					<hr>
					<?php 
					if(isset($_SESSION["Error"]))
					{
						$error = $_SESSION["Error"];
						echo "<br><span id='errorEmail'>$error</span><br><br>";
					}
					?>
					<label id="enquiryTxt">
						Please use this form to list your concerns or for any other agenda.
						<br>
						Please select the appropriate enquiry type for this request.
					</label>
					<br><br>
					<label id="enquiryLabels"><b> What was the consultation type for the session? <br> Please select accordingly from the options below:</b></label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="radioOpt" value="General" required> General Enquiry </label>
						<label class="radio-inline">
							<input type="radio" name="radioOpt" value="Emergency" required> Emergency Enquiry </label>
						<label class="radio-inline">
							<input type="radio" name="radioOpt" value="Feedback" required> Feedback Enquiry </label>
					</div>
					<br>
					<label id="eqLabels" for="userFirstName"><b>First Name</b></label> 
					<br>
						<input type="text" name="userFirstName" id="userFirstName" placeholder="Enter your First Name" required>
					<br><br>
					<label id="eqLabels" for="userLastName"><b>Last Name</b></label> 
					<br>
						<input type="text" name="userLastName" id="userLastName" placeholder="Enter your Last Name" required>
					<br><br>
					<label id="eqLabels" for="userEmail"><b>Email</b></label> 
					<br>
						<input type="email" name="userEmail" id="userEmail" placeholder="Enter your e-mail" required>
					<br><br>
					<label id="eqLabels" for="patEmail"><b>Phone Number</b></label> 
					<br>
						<input type="text" name="userPhone" id="userPhone" placeholder="Enter your phone number" required>
					<br><br>
					<label id="enquiryLabels" for="drugID"><b>Enquiry Content</b></label> 
					<br>
						<textarea id="msgSummary" name="msgSummary" placeholder="Write your enquiry message here" style="height:150px" required></textarea>
					<br><br>
					<table class="createEnquiryForm">
						<tr>
							<td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
							<td align="right"> <button class="buttonRounded submitBtn" type="submit"> Submit </button> </td>
						</tr>
					</table>
				</form>

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
<?php 
unset($_SESSION["Error"]);
?>