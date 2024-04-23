<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Payment - Riget Zoo Adventures</title>
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

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve user input
    $booking_number = $_POST['booking_number'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $security_code = $_POST['security_code'];
    $payment_amount = $_POST['payment_amount'];

    // Retrieve amount owed from database
    $query = "SELECT Owe FROM `Hotel_booking` WHERE Booking_number = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $booking_number);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $owe = $row['Owe'];

    // Validate card details
    if(validateCardDetails($card_number, $expiry_date, $security_code) && $payment_amount <= $owe) {
        
        // Update database with payment details
        $new_owe = $owe - $payment_amount;
        $query = "UPDATE `Hotel_booking` SET Owe = ?, Paid = Paid + ? WHERE Booking_number = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "iii", $new_owe, $payment_amount, $booking_number);
        $result = mysqli_stmt_execute($stmt);

        if($result) {
            echo "<div class='form'>
                <p>Payment successful!</p>
                <p>Click here to view your <a href='login.php'>booking!</a></p>";
        } else {
            echo "Error processing payment.";
        }
    } else {
        echo "Invalid payment details or payment amount exceeds owed amount. Please check your inputs.";
    }
}

// Function to validate card details
function validateCardDetails($card_number, $expiry_date, $security_code) {
    // Check if card number is between 16-19 digits
    if(strlen($card_number) < 16 || strlen($card_number) > 19) {
        return false;
    }

    // Check if expiry date is valid
    $current_month = date('m');
    $current_year = date('Y');
    $expiry_month = substr($expiry_date, 0, 2);
    $expiry_year = substr($expiry_date, 3);
    if($expiry_year < $current_year || ($expiry_year == $current_year && $expiry_month < $current_month)) {
        return false;
    }

    // Check if security code is valid
	if(strlen($security_code) < 3 || strlen($security_code) > 3) {
        return false;
    }
    
    return true;
}
?>
    <form action="" method="post">
        <label for="booking_number">Booking Number:</label>
        <input type="text" id="booking_number" name="booking_number" required><br><br>
        
        <!-- Other input fields for card details -->

        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required><br><br>
        
        <label for="expiry_date">Expiry Date:</label>
        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required><br><br>
        
        <label for="security_code">Security Code:</label>
        <input type="text" id="security_code" name="security_code" required><br><br>
        
        <label for="payment_amount">Payment Amount:</label>
        <input type="text" id="payment_amount" name="payment_amount" required><br><br>
        
        <input type="submit" name="submit" value="Make Payment">
    </form>


</div>

</body>
</html>
