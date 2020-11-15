<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

    <head>
		<title>Login</title>
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

        <!--Content of Page-->
        <div class="loginPage">
            <form class="loginForm" method="get" action="LoginHandler.php">
                <label id="loginFormLbl"><b> Email Address: </b></label>
                <br>
                <input type="email" name="Uname" id='Uname' placeholder="Email Address" required>
                <br><br>
                <label id="loginFormLbl"><b> Password: </b></label>
                <br>
                <input type="Password" name="Pass" id="Pass" placeholder="Password" required>
                <br><br>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<span id='errorLogin'>$error</span><br>";
                }
                ?>
                <button type="submit" class="buttonLog logInBtn"> Log In </button>
                <br><br>
                <input type="checkbox" id="cbox">
                <label class="loginTxt">Remember Me</label>
                <br><br>
                <label class="loginTxt">Forgotten your Password? Click <a href="ResetPasswordPage.php">here</a>!</label>
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