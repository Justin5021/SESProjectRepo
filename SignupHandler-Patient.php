<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$firstname = $_GET['FirstName'];
$lastname= $_GET['LastName'];
$email= $_GET['Email'];
$phoneno= $_GET['PhoneNo'];
$address= $_GET['Address'];
$pass= MD5($_GET['Password']);
$type = 'patient';

$query = "INSERT INTO Users (FirstName, LastName, Email, PhoneNo, Address, Pass, UserType, DoctorID) VALUES ('$firstname', '$lastname', '$email', '$phoneno', '$address', '$pass', '$type', NULL)";
if($dbc->query($query) === TRUE)
{
    header("Location: Signup-Success.php");
    //echo "<script>alert('Registration Successful');</script>";
} 
else 
{
    $_SESSION["Error"] = "Sign Up Failure: Database is not responding";
    header("Location: SignupPatientPage.php"); 
}

$dbc->close()
?>

