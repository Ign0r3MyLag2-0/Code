<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body> 
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
    <?php
    require("db.php");
    session_start();

    if (isset($_POST['Employee_number'])) {
		
		$Employee_number = stripslashes($_REQUEST['Employee_number']);
        $Employee_number = mysqli_real_escape_string($con, $Employee_number);
		
        $Name = stripslashes($_REQUEST['Name']);
        $Name = mysqli_real_escape_string($con, $Name);

        $query = "SELECT * FROM `users` WHERE Employee_number = '$Employee_number' and Name='$Name'";
        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            
		
			foreach ($result as $row) {
				$_SESSION['Employee_number'] = $Employee_number;
				$_SESSION ["DOB"] = $row ["DOB"];
				$_SESSION ["Name"] = $row ["Name"];
			
			}
			header("Location: dashboard.php");
		}

            
        else {
            echo "<div class='form'>
            <h3>Employee_number/Name is incorrect.</h3>
            <br/>Click here to <a href='login.php'>Login</a>
            </div>";
        }
    } else {

    ?>

    <form action="" method="post">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="Employee_number" placeholder="Employee number" required>
        <input type="text" class="login-input" name="Name" placeholder="Name" required>
        <input type="submit" name="submit" value="Login" class="login-button">
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
    </form>

    <?php
    }
    ?>
    
    <div class="footers">
		<p>&copy; 2023 Microtill. All rights reserved.</p></td>	
    </div>
</body>
</html>