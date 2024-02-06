<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ign0r3.com</title>
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
    require("db.php");
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query = "SELECT * FROM `users` WHERE username = '$username' and password='".md5($password)."'";
        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            
		
			foreach ($result as $row) {
				$_SESSION['username'] = $username;
				$_SESSION ["name"] = $row ["Name"];
			
			}
			header("Location: dashboard.php");
		}

            
        else {
            echo "<div class='form'>
            <h3>Username/password is incorrect.</h3>
            </div>";
        }
    } else {

    ?>

    <form action="" method="post">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Login" class="login-button">
    </form>

    <?php
    }
    ?>
    
    <div class="footers">
		<p>&copy; 2024 Ign0r3.com. All rights reserved.</p></td>	
    </div>
</body>
</html>