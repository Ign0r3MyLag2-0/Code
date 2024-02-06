<?php
include("auth_session2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
</head>
<body>
<?php
	include_once('db.php');
	
	if(isset($_POST['submit'])) {
		$rest_code = $_POST['Restaurant_code'];
		
		$sql = "SELECT * FROM orders WHERE Restaurant_code = $rest_code;";
		
	} ?>

<table class="ordertable">
	<tr>
		<th><?php echo $_SESSION['Items_ordered'];?></th>
	</tr>
	<tr>
		<th><?php echo $_SESSION['Time_ordered'];?></th>
	</tr>
</table>
<div class="footers">
	<p>&copy; 2023 Microtill. All rights reserved.</p></td>	
</div>

</body>
</html>