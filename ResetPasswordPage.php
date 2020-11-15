<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

    <head>
		<title>Forgot Password</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
	</head>

    <body class="loginStyle">

        <!--Logo-->
        <span class="logoDiv">
            <a id="homePage" href="index.php">
                <img src="img/TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <div class="resetPassword">
            <form class="resetForm" method="get" action="ResetPasswordPage-Handler.php">
                <label id="passwordLbl"><b> Enter your Details </b></label>
                <hr>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<br><span id='errorRPP'>$error </span><br><br>";
                }
                ?>
                <label id="resetLabel"><b> Email </b></label>
                <br>
                    <input type="email" name="userEmail" id="userEmail" placeholder="Email" required>
                <br><br>
                <label id="resetLabel"><b> First Name </b></label>
                <br>
                    <input type="text" name="userFName" id="userFName" placeholder="Your first name" required>
                <br><br>
                <label id="resetLabel"><b> Last Name </b></label>
                <br>
                    <input type="text" name="userLName" id="userLName" placeholder="Your last name" required>
                <br><br>

                <table class="resetFormTable">
                    <tr>
                        <td align="left"> <button class="buttonRounded backBtn" type="reset" onclick="location.href='LoginPage.php'"> Back </button> </td>
                        <td align="right"> <button class="buttonRounded continueBtn" type="submit"> Continue </button> </td>
                    </tr>
                </table>
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
<?php 
unset($_SESSION["Error"]);
?>