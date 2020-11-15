<?php
session_start();

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$query = "SELECT * FROM Drugs";
$result = mysqli_query($dbc, $query);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<title>Drug Inventory</title>
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
                <li><a href="DoctorHome.php"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a></li>
				<li><a href="LogoutHandler.php">Log Out</a></li>
			</ul>
		</nav>

        <!--Content of Page-->
        <div class="parallax" style="height: 120vh;">
        <div class="drugsList" id="drugsList">
			<br><br><br><br>
            <table align="center">
                <tr>
                    <th colspan="9"><label for="drugsListTitle" id="drugsListTitle"><h2><b> Drugs Inventory List </b></h2></label></th>
                </tr>
                <t>
                    <th> Drug ID </th>
                    <th> Drug Name </th>
                    <th> Prescription Cause </th>
                    <th> Drug Dosage </th>
                    <th> Frequency </th>
                    <th> Drug Type </th>
                    <th> Side Effects </th>
                    <th> Price </th>
                    <th> Amount </th>
                </t>
                <?php
                if(mysqli_num_rows($result) >= 1)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo '<tr>
                        <td>' . $row['DrugID'] . '</td>
                        <td>' . $row['DrugName'] . '</td>
                        <td>' . $row['PrescriptionCause'] . '</td>
                        <td>' . $row['DrugDose'] . '</td>
                        <td>' . $row['DrugFreq'] . '</td>
                        <td>' . $row['DrugType'] . '</td>
                        <td>' . $row['DrugEffects'] . '</td>
                        <td>AUD$' . $row['DrugPrice'] . '</td>
                        <td>' . $row['DrugStock'] . '</td>
                        </tr>';
                    }
                }
                else
                {
                    echo '<tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        </tr>';
                }
                ?>
            </table>
            <br><br>
            <label id="drugsListNote" for="drugsListNote"><b> Note: These values are purely the standard the drug comes in and is by no means the final prescription! </b></label>
        </div>
        <br><br>
        <div class="drugsListIssue">
            <form class="issueForm" method="get" action="ListIssueHandler.php">
                <label id="issueFormLbl"><b> Drugs Inventory Issue Form </b> </label>
                <hr>
                <?php 
					if(isset($_SESSION['Success']))
					{
						$msg = $_SESSION['Success'];
						echo "<br><label id='success'>$msg </label><br><br>";
					}
					if(isset($_SESSION['Failed']))
					{
						$msg = $_SESSION['Failed'];
						echo "<br><label id='errorUpdate'>$msg </label><br><br>";
					}
				?>	
                <label id="ifLabelTxt">
                    The purpose of this form is to inform the team about any errors found
                    in the Drug's List Table.
                    <br>
                    Should an error be discovered, please fill in the details within this form
                    with sufficient detail.
                </label>
                <br><br>
                <label id="issueLabels" for="drugID"><b>Drug ID and Name</b></label> 
                <br>
                    <textarea id="drugSummary" name="drugSummary" placeholder="Separate each drug by a new line, format it as ID-Name" style="height:150px" required></textarea>
                <br><br>
                <label id="issueLabels" for="issueText"><b>Issues Found</b></label> 
                <br>
                    <textarea id="issueSummary" name="issueSummary" placeholder="Please note the issues found here" style="height:150px" required></textarea>
                <br><br>
                <table class="createIssueForm">
                    <tr>
                        <td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
                        <td align="right"> <button class="buttonRounded submitBtn" type="submit"> Submit </button> </td>
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
unset($_SESSION["Success"]);
unset($_SESSION["Failed"]);
?>