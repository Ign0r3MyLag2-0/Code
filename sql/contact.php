<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Ign0r3.com</title>
    <link rel="stylesheet" href="../CSSs/styles.css">
	<link rel="icon" type="image/x-icon" href="../imagess/logo.png">
	
<header>
	<a class="header-logo-left">
		<img src="../imagess/logo.png" alt="Logo" height="100px" width="120px">
	</a>

	<h1>Welcome to Ign0r3.com/store</h1>
	
	<div class="header-menu">
		<div class="dropdown">
			<img class="dropbtn" src="../imagess/menu.png" alt="Menu" height="75px" width="130px">
				<div class="dropdown-content">
					<li><a href="https://ign0r3.com">Main</a></li>
						<li><a href="https://ign0r3.com/college/" target="_blank">College website</a></li>
						<li><a href="https://ign0r3.com/till/" target="_blank">Microtill Till</a></li>
						<li><a href="https://ign0r3.com/download/">Download</a></li>
						<li><a href="https://ign0r3.com/store/">Store</a></li>
				</div>
		</div>
	</div>
</header>
</head>
<body>
		
    <?php
		require('db.php');
		session_start();
		if (isset($_REQUEST['name'])) {
		
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con, $name);
		
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con, $email);
	
		$message = stripslashes($_REQUEST['message']);
		$message = mysqli_real_escape_string($con, $message);

		$query = "INSERT into `email` (name, email, message)
                VALUES ('$name', '$email', '$message')";

		$result = mysqli_query($con, $query);

		if ($result) {
			echo "<div class='form'>
			<h3>Form subbmitted successfully.</h3>
			<br/>Click here to <a href='../index.html'>Go to home.</a>
			</div>";
		} else {
			echo "<div class='form'> 
			<h3>Required fields are missing.</h3>
			<br/>Click here to <a href='contact.php'>go back to the Form</a>
			</div>";
		}
} else {

?>
		<form action="" method="post">
	    <h2 class="login-title">Contact form:</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </section>
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
			<td>
				<div class="footer-box">
					<div class="footer-logo">Contact me</div>
					<ul class="footer-links">
						<li><a>Contact@ign0r3.com</a></li>
						<li><a href="./contact.php">Message me</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
    <p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
</footer>
</html>
