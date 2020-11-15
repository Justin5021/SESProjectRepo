<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    
    <head>
		<title>Sign Up</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
	</head>

    <body class="loginStyle">
        <span class="logoDiv">
            <a id="homePage" href="index.php">
                <img src="img/TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <br><br><br><br>

        <!--Content of Page-->
        <div class="signUp">
            <form method="get" action="SignupHandler-Doctor.php">
                <label id="signUpTitle"> <b> Doctor Sign-Up </b><br><br></label>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<br><span id='errorEmail'>$error</span><br><br>";
                }
                ?>
                <label id="signUpFormLbl"> <b> First Name: </b><br> </label>
                <input type="text" name="FirstName" id="signUpField" placeholder="John" pattern="[A-Za-z]+" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Last Name: </b><br> </label>
                <input type="text" name="LastName" id="signUpField" placeholder="Smith" pattern="[A-Za-z]+" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Doctor ID: </b><br> </label>
                <input type="text" name="DoctorID" id="signUpField" placeholder="Doctor ID" pattern="[0-9]+" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Email Address: </b><br> </label>
                <input type="email" name="Email" id="signUpField" placeholder="johnsmith@mail.com" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Phone Number: </b><br> </label>
                <input type="text" name="PhoneNo" id="signUpField" placeholder="0411-123-456" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Address: </b><br> </label>
                <input type="text" name="Address" id="signUpField" placeholder="44 Home Street" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Password: </b><br> </label>
                <input type="password" name="Password" id="Password" placeholder="Password" title="Must contain at least 8 characters, with one uppercase letter, one lowercase letter, and one number" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <br><br>
                <label id="signUpFormLbl"> <b> Confirm Password: </b><br> </label>
                <input type="password" name="Confirm" id="Confirm" placeholder="Confirm Password" required>
                <br><br>
                <button class="buttonRounded signUpBtn" type="submit" onclick="return passValidate()"> Submit </button> </td>
            </form>
        </div>
        
        <!-- Footer Menu -->
        <div class="footerBar">
            <a id="FAQLink" href="FAQPage.php">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
            <a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
        </div>
        
        <script type="text/javascript">
            // Password Validation
            function passValidate() {
                var password = document.getElementById("Password").value;
                var confirm = document.getElementById("Confirm").value;
                if (password != confirm) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            };
        </script>

    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>