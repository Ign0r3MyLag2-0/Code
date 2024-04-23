<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Dashboard - Riget Zoo Adventures</title>
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
        <?php
	session_start();
?>
<table>
    <tr>
        <td>
            <div class="body-hotel-booking1">
                <p style="color:black">Hey, <?php if(isset($_SESSION['Name'])) echo $_SESSION['Name']; ?>!</p>
                <p style="color:black">You are now on the user dashboard page.</p>
            </div>
        </td>
        <td>		
            <div class="body-hotel-booking2">
                <p style="color:black">Username: <?php if(isset($_SESSION['Username'])) echo $_SESSION['Username']; ?></p>
                <p style="color:black">Name: <?php if(isset($_SESSION['Name'])) echo $_SESSION['Name']; ?></p>
                <p style="color:black">Email: <?php if(isset($_SESSION['Email'])) echo $_SESSION['Email']; ?></p>
                <p style="color:black">Booking number: <?php if(isset($_SESSION['Booking_number'])) echo $_SESSION['Booking_number']; ?></p>
                <p style="color:black">Date booked: <?php if(isset($_SESSION['Date_booked'])) echo $_SESSION['Date_booked']; ?></p>
                <p style="color:black">Nights booked: <?php if(isset($_SESSION['Nights_booked'])) echo $_SESSION['Nights_booked']; ?></p>
                <p style="color:black">Room required: <?php echo translateRoomRequired($_SESSION['Room_required']); ?></p>
                <?php
                function translateRoomRequired($roomCode) {
                    $translation = '';

                    // Define mappings for each room type
                    $roomTypes = [
                        's' => 'Single',
                        'd' => 'Double',
                        'c' => 'Cot'
                    ];

                    // Parse the room code
                    preg_match_all('/(\d+)([sdc]+)/', $roomCode, $matches, PREG_SET_ORDER);

                    // Translate each part of the room code
                    foreach ($matches as $match) {
                        $count = (int)$match[1];
                        $types = str_split($match[2]);

                        foreach ($types as $type) {
                            if (isset($roomTypes[$type])) {
                                $translation .= $count . ' ' . $roomTypes[$type] . ' ';
                            }
                        }
                    }

                    // Trim trailing space and return the translation
                    return trim($translation);
                }
                ?>
                <p style="color:black">Ticket required: <?php echo translateTicketRequired($_SESSION['Ticket_required']); ?></p>
                <?php
                function translateTicketRequired($ticketCode) {
                    $translation = '';

                    // Define mappings for each ticket type
                    $ticketTypes = [
                        'T' => 'Toddler',
                        'C' => 'Child',
                        'A' => 'Adult',
                        'S' => 'Student',
                        'O' => 'OAP',
                        'F' => 'Family'
                    ];

                    // Parse the ticket code
                    preg_match_all('/(\d+)([TCASOF]+)/', $ticketCode, $matches, PREG_SET_ORDER);

                    // Translate each part of the ticket code
                    foreach ($matches as $match) {
                        $count = (int)$match[1];
                        $types = str_split($match[2]);

                        foreach ($types as $type) {
                            if (isset($ticketTypes[$type])) {
                                $translation .= $count . ' ' . $ticketTypes[$type] . ' ';
                            }
                        }
                    }

                    // Trim trailing space and return the translation
                    return trim($translation);
                }
                ?>
                <p style="color:black">People attending: <?php if(isset($_SESSION['People_attending'])) echo $_SESSION['People_attending']; ?></p>
                <p style="color:black">Paid: <?php if(isset($_SESSION['Paid'])) echo $_SESSION['Paid']; ?></p>
                <p style="color:black">Owe: <?php if(isset($_SESSION['Owe'])) echo $_SESSION['Owe']; ?></p>
            </div>
        </td>
        <td>
            <div class="body-hotel-booking3">
                <p><a href='hotel_payment.php'>Make a payment</a></p>
                <p><a href='map.php'>Map of the resort</a></p>
                <?php if(isset($_SESSION['Owe']) && ($_SESSION['Owe'] == 0 || $_SESSION['Owe'] === '')): ?>
                    <p><a href='tickets.php'>Tickets</a></p>
                <?php else: ?>
                    <p>Tickets will be available once full payment is made.</p>
                <?php endif; ?>
                <p><a href='logout.php'>Log out</a></p>
            </div>
        </td>
    </tr>
</table>

</body>
</head>
</html>

        
