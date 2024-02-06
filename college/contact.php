<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - BIODAT</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body>
		<div class ="header123">
		<table class="headertable">
			<tr>
				<td><img src="./images/theme_logo.png" alt="Logo" height="75px" width="100px"></td>
				<td><h1>Welcome to Basildon Institute Of Design And Technologies</h1></td>
				<td><a href="./login.php">
					<img src="./images/account.jpg" alt="account" height="75px" width="75px">
				</a></td>
			</tr>
		</table>
        <nav>
            <ul>
				<div class="homebutton">
					<li><a href="./index.html">Home</a></li>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Programs (On site)</button>
					<div class="dropdown-content">
						<li><a href="./courses/it_os.html">IT</a></li>
						<li><a href="./courses/Programming_os.html">Programming</a></li>
						<li><a href="./courses/cloud_production_os.html">Cloud production</a></li>
						<li><a href="./courses/digital_productions_os.html">Digital productions</a></li>
						<li><a href="./courses/esports_os.html">Esports</a></li>
						<li><a href="./courses/english_os.html">English</a></li>
						<li><a href="./courses/maths_os.html">Maths</a></li>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Programs (Online)</button>
					<div class="dropdown-content">
						<li><a href="./courses/it_ol.html">IT</a></li>
						<li><a href="./courses/Programming_ol.html">Programming</a></li>
						<li><a href="./courses/cloud_production_ol.html">Cloud production</a></li>
						<li><a href="./courses/digital_productions_ol.html">Digital productions</a></li>
						<li><a href="./courses/esports_ol.html">Esports</a></li>
						<li><a href="./courses/english_ol.html">English</a></li>
						<li><a href="./courses/maths_ol.html">Maths</a></li>
						<li><a href="./courses/AWS_ol.html">AWS</a></li>
						<li><a href="./courses/Cisco_ol.html">Cisco</a></li>
						<li><a href="./courses/MP_ol.html">Microsoft professional</a></li>
					</div>
				</div>

                <div class="dropdown">
					<button class="dropbtn">About Us</button>
					<div class="dropdown-content">
						<li><a href="about.html">About Us</a></li>
						<li><a href="mission.html">Our Mission</a></li>
						<li><a href="vision.html">Our Vision</a></li>
						<li><a href="values.html">Our Values</a></li>
						<li><a href="motto.html">Our Motto</a></li>
					</div>
				</div>
				
                <div class="dropdown">
					<button class="dropbtn">Admissions</button>
					<div class="dropdown-content">
						<li><a href="./admissions_form.php">Form</a></li>
					</div>
				</div>
				
				<div class="dropdown">
					<button class="dropbtn">Contact</button>
					<div class="dropdown-content">
						<li><a href="./contact.php">Email us</a></li>
						<li><a href="./contactpost.html">Post to us</a></li>
						<li><a href="https://www.snapchat.com/" target="_blank">
							<img src="./images/snaplogo.png" alt="Snapchat" height="75px" width="75px">
						</a></li>
						<li><a href="https://www.instagram.com/" target="_blank">
							<img src="./images/instalogo.png" alt="Instagram" height="75px" width="75px">
						</a></li>
						<li><a href="https://en-gb.facebook.com/" target="_blank">
							<img src="./images/facebooklogo.png" alt="Facebook" height="75px" width="75px">
						</a></li>
						<li><a href="https://twitter.com/?lang=en-gb" target="_blank">
							<img src="./images/xlogo.png" alt="Twitter" height="75px" width="75px">
						</a></li>
					</div>
				</div>
            </ul>
        </nav>
	</div>

    <section class="emailfooterextention">
        <h2>Contact Us</h2>
        <h3>Contact Form:</h3>
		
    <?php
		require('db.php');

		if (isset($_REQUEST['name'])) {
		
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con, $name);
		
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con, $email);
	
		$message = stripslashes($_REQUEST['message']);
		$message = mysqli_real_escape_string($con, $message);

		$query = "INSERT into `message` (name, email, message)
                VALUES ('$name', '$email', '$message')";

		$result = mysqli_query($con, $query);

		if ($result) {
			echo "<div class='form'>
			<h3>Form subbmitted successfully.</h3>
			<br/>Click here to <a href='index.php'>Go to home.</a>
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

    <div class="footers">
        <p>&copy; 2023 BIODAT. All rights reserved.</p>
    </div>
</body>
</html>
