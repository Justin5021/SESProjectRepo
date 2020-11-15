<?php 
session_start();

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error); 
$patEmail = $_SESSION["email"];

$sqlValue = "SELECT * FROM Users WHERE Email='$patEmail'";
$resultValue = mysqli_query($dbc,$sqlValue);

if (mysqli_num_rows($resultValue) == 1) {
	while($row = $resultValue->fetch_assoc()) {
		$firstname = $row['FirstName'];
		$lastname = $row['LastName'];
		$phonenumber = $row['PhoneNo'];
		$address = $row['Address'];
		$email = $row['Email'];
		$password = $row['Pass'];
	}
} 

?>
<!DOCTYPE html>

<html lang="en">

    <head>
		<title>Settings</title>
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

        <!--Content of Page-->
        <div class="parallax">
        <br><br><br><br>
        <div class="patEdit">
            <form class="patForm" method="get" action="SettingsPageHandler-Patient.php">
                <label id="editLbl"><b> Account Settings</b></label>
                <hr>
                <label class="editTxt"> You can use this page to update any errors you made to your settings! </label>
                <br><br>
                <?php 
					if(isset($_SESSION['Success']))
					{
						$msg = $_SESSION['Success'];
						echo "<label id='success'>$msg </label><br><br>";
					}
					if(isset($_SESSION['Failed']))
					{
						$msg = $_SESSION['Failed'];
						echo "<label id='errorUpdate'>$msg </label><br><br>";
					}
				?>	
                <label id="editLabels"><b>First Name</b></label>
                <br>
                    <input type="text" id="patFirstName" name="patFirstName" value="<?php echo $firstname ?>" required>
                <br><br>		
                <label id="editLabels"><b>Last Name</b></label>
                <br>
                    <input type="text" id="patLastName" name="patLastName" value="<?php echo $lastname ?>" required>
                <br><br>	
                <label id="editLabels"><b>Email</b></label>
                <br>
                    <input type="email" id="patEmail" name="patEmail" value="<?php echo $email ?>" required>
                <br><br>
                <label id="editLabels"><b>Phone Number</b></label>
                <br>
                    <input type="tel" id="patPhone" name="patPhone" value="<?php echo $phonenumber ?>" required>
                <br><br>
                <label id="editLabels"><b>Address</b></label>
                <br>
                    <input type="text" id="patAddr" name="patAddr" value="<?php echo $address ?>" required>
                <br><br>
                <label id="forgotTxt"> Change your password <a href="ResetPasswordChangePage.php">here!</a></label>
                <br><br>
                <table class="patBtnTable">
                    <tr>
                        <td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
                        <td align="right"> <button class="buttonRounded updateBtn" type="submit"> Submit </button> </td>
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
unset($_SESSION["Success"]);
unset($_SESSION["Failed"]);
?>