<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body>
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
	
		<p style="color:black">Hey, <?php echo $_SESSION['Name']; ?>!</p>
		<p style="color:black">You are now on the user dashboard page.</p>
		
		<a href="./menu.php">
			<img src="./images/menu.png" alt="Menu" height="100px" width="100px">
		</a>
		
		<a href="./loginchef.php">
			<img src="./images/chef.png" alt="Chef" height="100px" width="100px">
		</a>

		<p style="color:black"><a href="login.php">Logout</a></p>
	</div>
    
    <div class="footers">
		<p>&copy; 2023 Microtill. All rights reserved.</p>
    </div>
</body>
</html>