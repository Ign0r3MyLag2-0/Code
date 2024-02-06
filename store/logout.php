<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Ign0r3.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
	<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AklD4TawvHHdo9Odz15zKMEXscQ3lp_3XOatdc8aXFX9iXC3rmueVflMOCOf6ipc&callback=loadMapScenario' async defer></script>
	
<header>
	<div class="header-logo">
		<div class="dropdown">
			<img src="./images/logo.png" alt="Logo" height="100px" width="120px">
				<div class="dropdown-content">
					<li><a href="https://ign0r3.com/store/login.php">Account</a></li>
					<li><a href="https://ign0r3.com/store/index.php">Store home</a></li>
					<li><a href="https://ign0r3.com/store/products.php">Products</a></li>
					<li><a href="https://ign0r3.com/store/contact.php">Contact Us</a></li>
					<li><a href="https://ign0r3.com/store/about.php">About Us</a></li>
				</div>
		</div>
	</div>

	<h1>Logout from Ign0r3.com/store</h1>
	
	<a href="https://ign0r3.com/store/basket.php" class="header-logo-right">
		<img class="dropbtn" src="./images/cart.png" alt="Menu" height="70px" width="70px">
	</a>
	
</header>
</head>
<body>

<?sql
	session_destroy ();
?>

<li><a href="./login.php">If you are not automaticaly redirected after 5 seconds please click here</a></li>

</body>
<footer>
	<table class="footer-table">
		<tr>
			<td>
				<div class="footer-box">
					<div class="footer-logo">Main options</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com/store/index.php">Home</a></li>
						<li><a href="https://ign0r3.com/store/products.php">Products</a></li>
						<li><a href="https://ign0r3.com/store/contact.php">Contact Us</a></li>
						<li><a href="https://ign0r3.com/store/about.php">About Us</a></li>
					</ul>
				</div>
			</td>
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
			<td>
				<div class="footer-box">
					<div class="footer-logo">Products</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com/store/products/shop.php">Shop web page</a></li>
						<li><a href="https://ign0r3.com/store/products/course.php">Online Courses</a></li>
						<li><a href="https://ign0r3.com/store/products/streaming.php">Online streaming site</a></li>
					</ul>
				</div>
			</td>
			<td>
				<div class="footer-box">
					<div class="footer-logo">Contact me</div>
					<ul class="footer-links">
						<li><a>Email: contact@ign0r3.com</a></li>
						<li><a href="https://ign0r3.com/store/contact.php">Message me</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
    <p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
</footer>
</html>
