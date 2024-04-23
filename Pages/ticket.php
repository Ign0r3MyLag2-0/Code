<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Ticket booking - Riget Zoo Adventures</title>
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
    $Date_booked = $_POST['Date_booked'];
    $People_attending = $_POST['People_attending'];

    // Calculate the total number of tickets selected
    $total_tickets = 0;
    foreach ($_POST['Ticket_required'] as $ticket) {
        $total_tickets += $ticket;
    }

    // Check if the total number of tickets matches the number of guests
    if ($total_tickets != $People_attending) {
        echo "The total number of tickets selected must match the number of guests attending.<br>
        <a href='ticket.php'>Click here to go back and try again</a> ";
        exit;
    }

    // Initialize total cost
    $total_cost = 0;

    // Initialize array to store ticket counts
    $ticket_counts = array(
        'T' => $_POST['Ticket_required']['T'],
        'C' => $_POST['Ticket_required']['C'],
        'A' => $_POST['Ticket_required']['A'],
        'S' => $_POST['Ticket_required']['S'],
        'O' => $_POST['Ticket_required']['O'],
        'F' => $_POST['Ticket_required']['F']
    );

    // Calculate total cost
    $total_cost += $ticket_counts['T'] * 0; // Toddler
    $total_cost += $ticket_counts['C'] * 10; // Child
    $total_cost += $ticket_counts['A'] * 15; // Adult
    $total_cost += $ticket_counts['S'] * 10; // Student
    $total_cost += $ticket_counts['O'] * 19; // OAP
    $total_cost += $ticket_counts['F'] * 40; // Family

    $Owe = $total_cost;

    // Get the last booking number
    $last_booking_query = "SELECT MAX(Booking_number) AS last_booking FROM `Hotel_booking`";
    $last_booking_result = mysqli_query($con, $last_booking_query);
    $last_booking_row = mysqli_fetch_assoc($last_booking_result);
    $last_booking_number = $last_booking_row['last_booking'];

    // Increment the last booking number by 1 to get the next booking number
    $Booking_number = $last_booking_number + 1;

    $Hotel_stay = "NO";

    // Update ticket counts in the database
    $ticket_required_str = '';
    foreach ($ticket_counts as $ticket_code => $count) {
        if ($count > 0) {
            $ticket_required_str .= "$count$ticket_code";
            $ticket_required_str .= ' ';
        }
    }
    $ticket_required_str = rtrim($ticket_required_str);
    $Ticket_required = $ticket_required_str;

    // Insert booking into database
    $insert_query = "INSERT INTO Hotel_booking (Booking_number, Date_booked, People_attending, Owe, Hotel_stay, Ticket_required) VALUES ('$Booking_number', '$Date_booked', '$People_attending', '$Owe', '$Hotel_stay', '$Ticket_required')";
    mysqli_query($con, $insert_query);

    echo "
    <h1>Booking successful!</h1>
    <p>Your booking number is: $Booking_number</p>
    <p>Your amount owed is now: £$total_cost<p>
    <br/>Click here to <a href='hotel_payment.php'>pay!</a>";
} else {
    // Generate a unique booking number
    $Booking_number = uniqid();

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
                        <?php
                        for ($i = 1; $i <= 30; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Tickets required</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="toddler">Toddler £0 0-4</label>
                    <select name="Ticket_required[T]" id="toddler" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <label for="child">Child £10 5-16</label>
                    <select name="Ticket_required[C]" id="child" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="adult">Adult £15 17-64</label>
                    <select name="Ticket_required[A]" id="adult" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <label for="student">Student £10 need ID</label>
                    <select name="Ticket_required[S]" id="student" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="oap">OAP £10 65+</label>
                    <select name="Ticket_required[O]" id="oap" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <label for="family">Family £40 2 adults 2 kids</label>
                    <select name="Ticket_required[F]" id="family" required>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit" class="login-button">
        <p class="link">Already have an booking? <a href="login.php">Login here.</a></p>
    </form>
<?php
}
?>


</div>
</body>
</html>
