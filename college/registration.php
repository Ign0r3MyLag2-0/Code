<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BIODAT</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<body>

<?php
require('db.php');

if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
	
	$DOB = stripslashes($_REQUEST['DOB']);
	$DOB = mysqli_real_escape_string($con, $DOB);
	
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con, $name);
	
	$Year_of_graduation = stripslashes($_REQUEST['Year_of_graduation']);
	$Year_of_graduation = mysqli_real_escape_string($con, $Year_of_graduation);

    $query = "INSERT into `users` (username, name, password, email, DOB, Year_of_graduation)
                VALUES ('$username', '$name', '".md5($password)."', '$email',  '$DOB', '$Year_of_graduation')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to <a href='login.php'>Login</a>
        </div>";
    } else {
        echo "<div class='form'> 
        <h3>Required fields are missing.</h3>
        <br/>Click here to <a href='registration.php'>Registration</a>
        </div>";
    }
} else {

?>

<form action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
		<input type="text" class="login-input" name="name" placeholder="Name" required>	
        <input type="email" class="login-input" name="email" placeholder="Email" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
		<input type="date" class="login-input" name="DOB" placeholder="DOB" required>
		<input type="text" class="login-input" name="Year_of_graduation" placeholder="Year of graduation" required>
        <input type="submit"  name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>

    <?php
}
?>
    
    <div class="footers">
			<p>&copy; 2023 BIODAT. All rights reserved.</p>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>