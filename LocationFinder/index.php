<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Loc finder - Ign0r3.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
	
<header>
	<h1>Welcome to Ign0r3.com/LocationFinder</h1>
</header>
</head>
<body>

<div>
	<?php
		$ip = file_get_contents('https://api.ipify.org');
		echo "My public IP address is: " . $ip;
	?>
</div>

<div>
	<p>Your Location is:</p>
	<?php
		$ip = $ip;
		$api_key = 'at_TyiRK6sJC8Qtk5pBLnxjIVAoGVC0h';
		$api_url = 'https://geo.ipify.org/api/v1';
		$url = "{$api_url}?apiKey={$api_key}&ipAddress={$ip}";
		print(file_get_contents($url));
	?>
</div>

<p>Click here to try a custom IP to track</p>

<div class="customs-links">
	<li><a href="./customIP.php">Custom</a></li>
</div>

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