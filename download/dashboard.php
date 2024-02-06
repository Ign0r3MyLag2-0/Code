<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - Ign0r3.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
</head>
<body>
	<div class ="header123">
		<table class="headertable">
			<tr>
				<td><img src="./images/logo.png" alt="Logo" height="75px" width="100px"></td>
				<td><h1>Welcome to Ign0r3.com</h1></td>
				<td>
					<div class="dropdown">
						<img class="dropbtn" src="./images/menu.png" alt="Menu" height="130px" width="100px">
						<div class="dropdown-content">
							<li><a href="https://ign0r3.com">Main</a></li>
							<li><a href="https://ign0r3.com/college/" target="_blank">College website</a></li>
							<li><a href="https://ign0r3.com/till/" target="_blank">Microtill Till</a></li>
							<li><a href="https://ign0r3.com/download/">Download</a></li>
							<li><a href="https://ign0r3.com/store/">Store</a></li>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<div class="Dashwelcomes">
		<p style="color:black">Hey, <?php echo $_SESSION['name']; ?>!</p>
		<p style="color:black">You are now on the user Download page.</p>
	</div>
		
	<div class="Dashinfos">
		<p style="color:black">Username: <?php echo $_SESSION['username']; ?><p>
		<p style="color:black">Name: <?php echo $_SESSION['name']; ?><p>
		
		<div>
			<a href="https://drive.google.com/drive/folders/1MH9lDFLjozxlRQkD-HXMQOPASyhkOLdr?usp=sharing" target="_blank">Download for College site</a>
		</div>
		
		<div>
			<a href="https://drive.google.com/drive/folders/1D9nFAqBsqaDKacxVdR2LWjTkqeAF0aED?usp=sharing" target="_blank">Download for Microtill till</a>
		</div>

		<p style="color:black"><a href="login.php">Logout</a></p>
	</div>
    
    <div class="footers">
		<p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
    </div>
</body>
</html>