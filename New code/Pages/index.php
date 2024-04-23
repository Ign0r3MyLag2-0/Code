<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Home - Riget Zoo Adventures</title>
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
            <img src="../Images/long_logo.PNG" alt="Logo">
        </div>
        <table style="margin-right:0px;margin-left:auto" class="body-table">
            <tr>
                <th>
                    <a href="./accesability.php">
                    <img src="../Images/accessibility_icon.PNG" alt="Accessability">
                </th>
            </tr>
            <tr>
            <th><div class="body-dropdown">
		                <div class="dropdown-update">
			                <img src="../Images/latest_update.png" alt="Logo" height="100px" width="200px">
				            <div class="dropdown-content-update">
					            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				            </div>
		                </div>
	                </div>
                </th>
            </tr>
            <tr>
                <th><div class="body-dropdown">
		                <div class="dropdown">
			                <img src="../Images/drop_down.png" alt="Logo" height="100px" width="120px">
				                <div class="dropdown-content">
					                <a href="./book-now.php">Book Now</a>
                                    <a href="./login.php">Log In</a>
					                <a href="./map.php">Map</a>
					                <a>Plan your visit</a>
                                    <a>About us</a>
					                <a>Gift shop</a>
                                    <a>Education</a>
				                </div>
		                </div>
	                </div>
                </th>
            </tr>
            <tr>
                <th>
        </table>
        <div class="body-animals-picture">
            <img src="../Images/animals_in_a_picture.png" alt="Animals">
        </div>
        <div class="body-maininfo">
            <img src="../Images/monkey-hair.png" alt="fur">
        </div>
        <table class="body-maininfo-table">
            <tr>
                <th>
                    <a href="./hotel.php">
                    <img src="../Images/hotel.jpg" alt="Hotel booking">
                </th>
                <th class="body-ticketbooking">
                    <a href="./ticket.php">
                    <img src="../Images/ticket.png" alt="Ticket booking">
                </th>
            </tr>
        </table>
        <div class="body-opening-times">
            <img src="../Images/opening_times.png" alt="Opening times">
        </div>
        <div class="footer-image">
            <img src="../Images/footer.PNG" alt="Footer">
        </div>
</body>
</head>
</html>
