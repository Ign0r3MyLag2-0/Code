<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Registration - Riget Zoo Adventures</title>
        <link rel="icon" type="image/x-icon" href="../Images/short_logo.png">
    <header>
        <div class="container">
            <div class="tiger-print"></div>
            <div class="box"><a href="./book-now.php"><p>Book now</p></a></div>
            <div class="search-button">
                <div class="search-box">
                    <input type="text" id="searchBox" class="input-search" placeholder="Enter animal name">
                    <button id="SearchFunction" onclick="searchForAnimal()">Search</button>
                </div>
            </div>
        </div>
    </header>
    <script>
        // Predefined list of animals in the zoo
        const zooAnimals = ['Lion', 'Tiger', 'Bear', 'Giraffe', 'Elephant', 'Zebra', 'Penguin'];

        // Function to search for an animal
        function searchForAnimal() {

            // Get the search term from the input box and convert it to lowercase
             var searchTerm = document.getElementById('searchBox').value.trim().toLowerCase();

            // Convert each animal name in the zooAnimals array to lowercase and then check if the lowercase search term is in the list of lowercase zoo animals
            var foundAnimal = zooAnimals.find(animal => animal.toLowerCase() === searchTerm);

            if (foundAnimal) {
                // If the animal is found, redirect to the animal's page
                window.location.href = "./" + foundAnimal + ".php";
            } else {
                // If the animal is not found, display an error message
                alert("No animal of that type exists.");
            }
        }
    </script>
    <body>
        <div class="body-logo">
            <a href="./index.php">
                <img src="../Images/long_logo.PNG" alt="Logo">
            </a>
        </div>
<div class="body-hotel-booking">
<?php
require('db.php');
if (isset($_POST['submit'])) {
    $Username = stripslashes($_POST['Username']);
    $Username = mysqli_real_escape_string($con, $Username);
    
    $Password = stripslashes($_POST['Password']);
    $Password = mysqli_real_escape_string($con, $Password);
    
    $Email = stripslashes($_POST['Email']);
    $Email = mysqli_real_escape_string($con, $Email);

    $Booking_number = stripslashes($_POST['Booking_number']);
    $Booking_number = mysqli_real_escape_string($con, $Booking_number);

	$Name = stripslashes($_POST['Name']);
    $Name = mysqli_real_escape_string($con, $Name);
	
	// Check if the booking number already has registered username, email, and password
		$query = "SELECT * FROM `Hotel_booking` WHERE Username = '$Username'";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		
		if ($rows > 0) {
			$row = mysqli_fetch_assoc($result);
			echo "<div class='form'> 
				<h3>Username already Taken. Please try again with a different username.</h3>
				<br/>Click here to <a href='registration.php'>try again.</a>
				</div>";
				
		}else{

			// Check if the booking number already has registered username, email, and password
			$query = "SELECT * FROM `Hotel_booking` WHERE Booking_number = '$Booking_number'";
			$result = mysqli_query($con, $query) or die(mysql_error());
			$rows = mysqli_num_rows($result);

			if ($rows > 0) {
				$row = mysqli_fetch_assoc($result);
				// Check if username, email, and password fields are already filled
				if (!empty($row['Username']) && !empty($row['Email']) && !empty($row['Password'])) {
					// Username, email, and password already registered for this booking number
					echo "<div class='form'> 
						<h3>Booking number already registered. Please check your booking number and try again.</h3>
						<br/>Click here to <a href='registration.php'>try again.</a>
						</div>";
				} else {
					// Username, email, and password fields are empty, proceed with registration
					$query = "UPDATE `Hotel_booking` SET Username = '$Username', Password = '".md5($Password)."', Email = '$Email', Name = '$Name' WHERE Booking_number = '$Booking_number'";
					$result = mysqli_query($con, $query);

					if ($result) {
						echo "<div class='form'>
						<h3>You have created an account</h3>
						<br/>Click here to <a href='login.php'>Login</a>
						</div>";
					} else {
						echo "<div class='form'> 
						<h3>Failed to register. Please try again later.</h3>
						<br/>Click here to <a href='registration.php'>try again.</a>
						</div>";
					}
				}
	} else {
		// Booking number not found in the database
		echo "<div class='form'> 
			<h3>Invalid booking number. Please check your booking number and try again.</h3>
			<br/>Click here to <a href='registration.php'>try again.</a>
			</div>";
		}
	}
} else {
?>
<form action="" method="post">
    <h1 class="login-title">Registration</h1>
	<p>Name</p>
    <input type="text" class="login-input" name="Name" placeholder="Name" required>
	
    <p>Username</p>
    <input type="text" class="login-input" name="Username" placeholder="Username" required>

    <p>Password</p>
    <input type="password" class="login-input" name="Password" placeholder="Password" required>

    <p>Email</p>
    <input type="email" class="login-input" name="Email" placeholder="Email" required>

    <p>Booking number</p>
    <input type="int" class="login-input" name="Booking_number" placeholder="Booking_number" required>


    <input type="submit"  name="submit" value="Register" class="login-button">
    <p class="link">Already have an account? <a href="login.php">Login here</a></p>
</form>
<?php
}
?>
</div>
</body>
</head>
</html>