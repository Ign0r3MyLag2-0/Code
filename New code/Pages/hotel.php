<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Hotel booking - Riget Zoo Adventures</title>
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
if (isset($_REQUEST['Date_booked'])) {
    $Date_booked = stripslashes($_REQUEST['Date_booked']);
    $Date_booked = mysqli_real_escape_string($con, $Date_booked);
    
    $People_attending = stripslashes($_REQUEST['People_attending']);
    $People_attending = mysqli_real_escape_string($con, $People_attending);

    $Room_required = stripslashes($_REQUEST['Room_required']);
    $Room_required = mysqli_real_escape_string($con, $Room_required);

    $Nights_booked = stripslashes($_REQUEST['Nights_booked']);
    $Nights_booked = mysqli_real_escape_string($con, $Nights_booked);

    // Calculate the cost of the selected room
    $room_cost = 0;
    switch ($Room_required) {
        case "1s1c":
            $room_cost = 80;
            break;
        case "1d1c":
            $room_cost = 95;
            break;
        case "1s2c":
            $room_cost = 100;
            break;
        case "1d2c":
            $room_cost = 115;
            break;
        case "1s":
            $room_cost = 75;
            break;
        case "1d":
            $room_cost = 90;
            break;
        case "2s":
            $room_cost = 100;
            break;
        case "2d":
            $room_cost = 140;
            break;
        case "1d1s1c":
            $room_cost = 180;
            break;
    }

    // Query to find the last booking number
    $last_booking_query = "SELECT MAX(Booking_number) AS last_booking FROM `Hotel_booking`";
    $last_booking_result = mysqli_query($con, $last_booking_query);
    $last_booking_row = mysqli_fetch_assoc($last_booking_result);
    $last_booking_number = $last_booking_row['last_booking'];
    
    // Increment the last booking number by 1 to get the next booking number
    $Booking_number = $last_booking_number + 1;

    // Calculate the end date based on the number of nights booked
    $end_date = date('Y-m-d', strtotime($Date_booked . ' + ' . ($Nights_booked - 1) . ' days'));

    // Query to count occupied rooms within the requested date range
    $query = "SELECT SUM(People_attending) AS occupied_rooms 
              FROM `Hotel_booking` 
              WHERE Date_booked BETWEEN '$Date_booked' AND '$end_date' 
              AND Hotel_stay = 'YES'";

    $result = mysqli_query($con, $query);

    if ($result) {
        // Fetch the total occupied rooms
        $row = mysqli_fetch_assoc($result);
        $occupied_rooms = $row['occupied_rooms'];

        // Calculate the remaining available rooms
        $available_rooms = 7 - $occupied_rooms;

        // Check if the requested number of guests exceed available rooms
        if ($People_attending > $available_rooms) {
            // Display error message
            echo "<div class='form'> 
                        <h3>Maximum amount of guests on selected date. Please try again and choose another date.</h3>
                        <br/>Click here to <a href='hotel.php'>try again.</a>
                  </div>";
        } else {
            $owe = $room_cost * $Nights_booked;
            $Hotel_stay = "YES"; // Assuming Hotel_stay is constant

            $query = "INSERT into `Hotel_booking` (Booking_number, Date_booked, People_attending, Room_required, Owe, Hotel_stay, Nights_booked)
                        VALUES ('$Booking_number', '$Date_booked', '$People_attending', '$Room_required', '$owe', '$Hotel_stay', '$Nights_booked')";

            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<div class='form'>
                <h3>You have registered your booked successfully.</h3>
                <p>Your booking number is: $Booking_number</p>
                <p>Your amount owed is now: £$owe<p>
                <br/>Click here to <a href='hotel_payment.php'>pay!</a>
                </div>";
            } else {
                echo "<div class='form'> 
                <h3>Required fields are missing.</h3>
                <br/>Click here to <a href='hotel.php'>try again.</a>
                </div>";
            }
        }
    }
}
else {
?>

<form action="" method="post">
    <table class="registration-table">
        <tr>
            <td>
                <p>Date required:</p>
                <input type="date" class="login-input" name="Date_booked" placeholder="Date required" required>
            </td>
            <td>
                <p>Number of guests</p>
                <select name="People_attending" id="guest" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <td>
                <p>Room required</p>
                <select name="Room_required" id="Room" required>
                    <option value="1s1c">1 Single 1 Cot £80pn</option>
                    <option value="1d1c">1 Double 1 Cot £95pn</option>
                    <option value="1s2c">1 Single 2 Cot's £100pn</option>
                    <option value="1d2c">1 Double 2 Cot's £115pn</option>
                    <option value="1s">1 Single £75pn</option>
                    <option value="1d">1 Double £90pn</option>
                    <option value="2s">2 Single's £100pn</option>
                    <option value="2d">2 Double's £140pn</option>
                    <option value="1d1s1c">1 Double 1 Single 1 Cot £180pn</option>
                </select>
            </td>
            <td>
                <p>Number of nights</p>
                <select name="Nights_booked" id="nights" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </td>
    </table>
    <input type="submit"  name="submit" value="Submit" class="login-button">
    <p class="link">Already have an booking? <a href="login.php">Login here.</a></p>
    <p>Note: Please make a new booking per room maximum of four people per room.</p>
    <p>Note: Please ensure that there are enough beds for occupants coming.</p>
    <p>Note: Zoo tickets free with the amount given being the same as people attending</p>
    <p>Please abide to these rules: one child under the age of 5 per cot,<br>
    one person per single bed, two people to a double bed, one person over the age<br>
    of 10 cannot share a double bed with someone of the opposite gender if both<br>
    persons are over the age of 16 they may share a bed as long as they are in no way<br>
    related, if one person is over the age of 10 but under the age of 16 they may not<br>
    share a bed with someone over the age of 16. If you are found to be breaking <br>
    these rules you will be escorted out and asked not to return with no refund given.</p>

</form>

<?php
}
?>
</div>
</body>
</html>
