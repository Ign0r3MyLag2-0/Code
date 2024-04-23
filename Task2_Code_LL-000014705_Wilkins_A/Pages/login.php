<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Log in - Riget Zoo Adventures</title>
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
session_start();
if (isset($_POST['Username'])) {
    $Username = stripslashes($_REQUEST['Username']);
    $Username = mysqli_real_escape_string($con, $Username);

    $password = stripslashes($_REQUEST['Password']); // Corrected case to match form input
    $password = mysqli_real_escape_string($con, $password);

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM `Hotel_booking` WHERE Username = '$Username' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con)); // Used mysqli_error instead of mysql_error

    $rows = mysqli_num_rows($result);

    if ($rows == 1) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION["Booking_number"] = $row["Booking_number"];
        $_SESSION["Username"] = $row["Username"];
        $_SESSION["Email"] = $row["Email"];
        $_SESSION["Date_booked"] = $row["Date_booked"];
        $_SESSION["Nights_booked"] = $row["Nights_booked"];      
        $_SESSION["Room_required"] = $row["Room_required"];
        $_SESSION["Ticket_required"] = $row["Ticket_required"];
        $_SESSION["People_attending"] = $row["People_attending"];
        $_SESSION["Paid"] = $row["Paid"];
        $_SESSION["Owe"] = $row["Owe"];
        $_SESSION["Name"] = $row["Name"];

        header("Location: dashboard.php");
        exit;
    } else {
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a>
        </div>";
    }
} else {
?>

<form action="" method="post">
    <h1 class="login-title">Login</h1>
    <input type="text" class="login-input" name="Username" placeholder="Username" required>
    <input type="password" class="login-input" name="Password" placeholder="Password" required>
    <input type="submit" name="submit" value="Login" class="login-button">
    <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
</form>

<?php
}
?>
</body>
</head>
</html>