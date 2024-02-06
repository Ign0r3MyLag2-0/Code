<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom IP Loc finder - Ign0r3.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
	
<header>
	<h1>Welcome to Ign0r3.com/LocationFinder/CustomIPLogin</h1>
</header>
</head>
<body>

<?php
require("db.php");
session_start();
if (isset($_POST['IPS'])) {
	$IPS = stripslashes($_REQUEST['IPS']);
	$IPS = mysqli_real_escape_string($con, $IPS);

	$query = "SELECT * FROM `ips` WHERE IPS = '$IPS'";
	$result = mysqli_query($con, $query) or die(mysql_error());

	$rows = mysqli_num_rows($result);

	if ($rows == 1) {
		
	
		foreach ($result as $row) {
			$_SESSION["ID"] = $row["ID"];
			$_SESSION["IPS"] = $row["IPS"];
			
		}
		header("Location: dashboard.php");
	}

		
	else {
		echo "<div class='form'>
		<h3>IP is not in database.</h3>
		<br/>Click here to <a href='process.php'>try again.</a>
		</div>";
	}
} else {

?>

<form action="" method="post">
	<h1 class="login-title">Registered custom IP:</h1>
	<input type="text" class="login-input" name="IPS" placeholder="IP" required>
	<input type="submit" name="submit" value="Submit" class="login-button">
	<p class="link">Don't have a registered IP? <a href="customIP.php">Register Now</a></p>
</form>

<?php
}
?>
	
</body>
<footer>
	<table class="footer-table">
		<tr>
			<td>
				<div class="footer-box">
					<div class="footer-logo">My other projects</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com">Main</a></li>
						<li><a href="https://ign0r3.com/college/" target="_blank">College website</a></li>
						<li><a href="https://ign0r3.com/till/" target="_blank">Microtill Till</a></li>
						<li><a href="https://ign0r3.com/download/">Download</a></li>
						<li><a href="https://ign0r3.com/store/index.php">Store</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
    <p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
</footer>
</html>	
