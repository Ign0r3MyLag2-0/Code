<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ign0r3.com</title>
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

	<h1>Register to Ign0r3.com/store</h1>
	
	<a href="https://ign0r3.com/store/basket.php" class="header-logo-right">
		<img class="dropbtn" src="./images/cart.png" alt="Menu" height="70px" width="70px">
	</a>
	
</header>
</head>
<body>

<?php
require('db.php');

if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
	
	$first = stripslashes($_REQUEST['first']);
    $first = mysqli_real_escape_string($con, $first);
	
	$second = stripslashes($_REQUEST['second']);
    $second = mysqli_real_escape_string($con, $second);
	
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
	
	$email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
	
	$dob = stripslashes($_REQUEST['dob']);
    $dob = mysqli_real_escape_string($con, $dob);
	
	$street = stripslashes($_REQUEST['street']);
    $street = mysqli_real_escape_string($con, $street);
	
	$postcode = stripslashes($_REQUEST['postcode']);
    $postcode = mysqli_real_escape_string($con, $postcode);

    $query = "SELECT * FROM `users` WHERE  username = 'username'";
    $result = mysqli_query($con, $query) or die(mysql_error());
				
	$rows = mysqli_num_rows($result);
				
	if ($rows > 0) { 
		echo "<div class='form'> 
			<h3>Account already exists in database please try a different Username or use the login page.</h3>
			<br/>Click here to <a href='customIP.php'>try again.</a>
			</div>";
	}
	else {
			$query = "INSERT into `users` (username, first, second, password, email, dob, street, postcode)
						VALUES ('$username', '$first', '$second', '".md5($password)."', '$email', '$dob', '$street', '$postcode')";

			$result = mysqli_query($con, $query);

			if ($result) {
				echo "<div class='form'>
				<h3>You have registered your request successfully.</h3>
				<br/>Click here to <a href='login.php'>Login</a>
				</div>";
			} else {
				echo "<div class='form'> 
				<h3>Required fields are missing.</h3>
				<br/>Click here to <a href='registration.php'>try again.</a>
				</div>";
			}
		}
	}
else {

?>

<form action="" method="post">
        <h1 class="login-title">Registration</h1>
		<table class="registration-table">
			<tr>
				<td>
					<p>Username</p>
					<input type="text" class="login-input" name="username" placeholder="Username" required>
				</td>
				<td>
					<p>First Name</p>
					<input type="text" class="login-input" name="first" placeholder="First Name" required>	
				</td>
				<td>
					<p>Second Name</p>
					<input type="text" class="login-input" name="second" placeholder="Second Name" required>	
				</td>
				<td>
					<p>Password</p>
					<input type="password" class="login-input" name="password" placeholder="Password" required>
				</td>
				<td>
					<p>Email</p>
					<input type="email" class="login-input" name="email" placeholder="Email" required>
				</td>
				<td>
					<p>DOB</p>
					<input type="date" class="login-input" name="dob" placeholder="DOB" required>
				</td>
				<td>
					<p>Street</p>
					<input type="text" class="login-input" name="street" placeholder="Street" required>
				</td>
				<td>
					<p>Postcode</p>
					<input type="text" class="login-input" name="postcode" placeholder="Postcode" required>
				</td>
			<tr>
		</table>
        <input type="submit"  name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
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
