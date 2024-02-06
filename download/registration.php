<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ign0r3.com</title>
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
<body>

<?php
require('db.php');

if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
	
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
	
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con, $name);

    $query = "INSERT into `users` (username, password, name)
                VALUES ('$username','".md5($password)."', '$name')";

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
		<input type="password" class="login-input" name="password" placeholder="Password" required>	
		<input type="text" class="login-input" name="name" placeholder="Name" required>
		
        <input type="submit"  name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>

    <?php
}
?>
    
    <div class="footers">
			<p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>