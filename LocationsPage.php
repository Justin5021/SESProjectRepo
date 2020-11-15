<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Locations</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>

    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(-33.95,151),
                zoom:11,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            
            var Clinic1Pos = {lat: -33.883665,lng: 151.200807};
            var Clinic2Pos = {lat: -33.921141,lng: 150.927306};
            var Clinic3Pos = {lat: -34.066099,lng: 150.825935};
            var Clinic4Pos = {lat: -33.811958,lng: 151.006155};
            var Clinic5Pos = {lat: -33.803899,lng: 151.289648};
            var Clinic6Pos = {lat: -33.901553,lng: 151.016362};
            var Clinic7Pos = {lat: -34.032817,lng: 151.058590};

            var marker1 = new google.maps.Marker({
                position: Clinic1Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker2 = new google.maps.Marker({
                position: Clinic2Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker3 = new google.maps.Marker({
                position: Clinic3Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker4 = new google.maps.Marker({
                position: Clinic4Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker5 = new google.maps.Marker({
                position: Clinic5Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker6 = new google.maps.Marker({
                position: Clinic6Pos,
                map: map,
                title: 'Medical Clinic'
            });

            var marker7 = new google.maps.Marker({
                position: Clinic7Pos,
                map: map,
                title: 'Medical Clinic'
            });

            }   
        </script>
        <!-- removed API key as repo was made public to prevent anyone stealing it. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=GetYourOwn"></script>

    </head>

    <body onLoad="myMap()">
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
            
            <div id="googleMap" style="width:100%; height: 100%;">
               <!-- Google map will be embedded here-->
            
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

    </body>
    
</html>
