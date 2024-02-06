<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in chef - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
</head>
<body>
<?php
    require("db.php");
    session_start();

    if (isset($_POST['Restaurant_code'])) {
		
		$Restaurant_code = stripslashes($_REQUEST['Restaurant_code']);
        $Restaurant_code = mysqli_real_escape_string($con, $Restaurant_code);

        $query = "SELECT * FROM `orders` WHERE Restaurant_code = '$Restaurant_code'";
        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            
		
			foreach ($result as $row) {
				$_SESSION['Restaurant_code'] = $row["Restaurant_code"];
				$_SESSION["Items_ordered"] = $row["Items_ordered"];
				$_SESSION["Time_ordered"] = $row["Time_ordered"];
			
			}
			header("Location: chef.php");
		}

            
        else {
            echo "<div class='form'>
            <h3>Store code is incorrect.</h3>
            <br/>Click here to <a href='loginchef.php'>try again</a>
            </div>";
        }
    } else {

    ?>

    <form action="chef.php" method="post">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="Restaurant_code" placeholder="Restaurant code" required>
        <input type="submit" name="submit" value="Login" class="login-button">
    </form>

    <?php
    }
    ?>
    
    <div class="footers">
		<p>&copy; 2023 Microtill. All rights reserved.</p></td>	
    </div>
</body>
</html>