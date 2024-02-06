<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body>
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
<?php
require('db.php');

if (isset($_REQUEST['Employee_number'])) {
    $Name = stripslashes($_REQUEST['Name']);
    $Name = mysqli_real_escape_string($con, $Name);
	
	$DOB = stripslashes($_REQUEST['DOB']);
	$DOB = mysqli_real_escape_string($con, $DOB);
	
	$Employee_number = stripslashes($_REQUEST['Employee_number']);
	$Employee_number = mysqli_real_escape_string($con, $Employee_number);

    $query = "INSERT into `users` (Name, DOB, Employee_number)
                VALUES ('$Name',  '$DOB', '$Employee_number')";

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
        <input type="text" class="login-input" name="Name" placeholder="Name" required>
		<input type="date" class="login-input" name="DOB" placeholder="DOB" required>
		<input type="text" class="login-input" name="Employee_number" placeholder="Employee number" required>
        <input type="submit"  name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>

    <?php
}
?>
    
    <div class="footers">
			<p>&copy; 2023 Microtill. All rights reserved.</p>
    </div>
</body>
</html>