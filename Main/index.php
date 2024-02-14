<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - HealthCentral.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
	<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AklD4TawvHHdo9Odz15zKMEXscQ3lp_3XOatdc8aXFX9iXC3rmueVflMOCOf6ipc&callback=loadMapScenario' async defer></script>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	
<header>
	<div class="header-logo">
		<div class="dropdown">
			<img src="./images/logo.png" alt="Logo" height="100px" width="120px">
				<div class="dropdown-content">
					<li><a href="">Account</a></li>
					<li><a href="">Store home</a></li>
					<li><a href="">Products</a></li>
					<li><a href="">Contact Us</a></li>
					<li><a href="">About Us</a></li>
				</div>
		</div>
	</div>

	<h1>Welcome to Health Central.com</h1>
	
	<a href="" class="header-logo-right">
		<img class="dropbtn" src="./images/cart.png" alt="Menu" height="70px" width="70px">
	</a>
	
</header>
</head>
<body>
<div class="body-headertext">
	<h1> Welcome to HealthCentral.com - Your Gateway to Health Excellence! </h1>
</div>

<div class="body-search-box" id="body-search-box">
	<div class="search-box" style="padding:5px">
	   <button class="btn-search" onclick="fetchWeatherData()"><i class="fas fa-search"></i></button>
	   <input type="text" class="input-search" id="city-input" placeholder="Type to Search city...">
	</div>

	<div class="search-container" id="body-weather-search" style="padding:5px">
		<h1 id="app_header">Current Weather in ?</h1>
		<div id="weather">Loading weather data...</div>
		<img id="weather-icon" src="" alt="Weather Icon"/>
		<div id="myMap" style="width: 100px; height: 100px;"></div>
	</div>
</div>

<div class="body-homemap">
	<div id="mymap" style="width: 100%; height: 400px;"></div>
</div>
<script async defer>
        function loadMapScenario() {
    var map = new Microsoft.Maps.Map(document.getElementById('mymap'), {
        /* Initialize map options */
        center: new Microsoft.Maps.Location(47.606209, -122.332071), // Default location
        zoom: 10
    });

    // Search for a location
    var searchManager;
    Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
        searchManager = new Microsoft.Maps.Search.SearchManager(map);
        var address = "Basildon, essex"; // Replace with the address you want to search
        searchManager.geocode({
            where: address,
            callback: function (results) {
                if (results && results.results && results.results.length > 0) {
                    var firstResult = results.results[0];
                    var pin = new Microsoft.Maps.Pushpin(firstResult.location, {
                        title: 'HealthCentral.com HQ Location',
                        subTitle: address
                    });
                    map.entities.push(pin);
                    map.setView({ center: firstResult.location, zoom: 15 });
                } else {
                    alert('Address not found.');
                }
            },
            errorCallback: function (e) {
                // Handle the error
                alert('Error occurred: ' + e);
            }
        });
    });
}
</script>
<script>
	function fetchWeatherData() {
		let apiKey = '6e3a1fef8b354ccc82894137241402'; // Replace with your API key
		let city = document.getElementById('city-input').value || 'London';
		let url = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${city}`;

		fetch(url)
			.then(response => response.json())
			.then(data => {
				displayWeather(data);
			})
			.catch(error => {
				console.error('Error:', error);
				document.getElementById('weather').innerText = 'Failed to load weather data';
			});
	}

	function displayWeather(data) {
		// Display the weather data on your webpage
		let weatherDiv = document.getElementById('weather');
		let iconImg = document.getElementById('weather-icon');
		let header = document.getElementById('app_header');
		let temp_c = data.current.temp_c;
		let condition = data.current.condition.text;
		let iconUrl = data.current.condition.icon;
		let location = data.location.name;
		let weather_text = document.getElementById("body-weather-search")
		let weather_border = document.getElementById("body-search-box")
		
		weather_border.style.border = `3px solid black`;
		weather_border.style.width = `33%`;
		weather_border.style.height = `250px`;
		weather_text.style.display = `block`;
		weatherDiv.innerText = `Location: ${location} Temperature: ${temp_c}°C, Condition: ${condition}`;
		iconImg.src = `https:${iconUrl}`; // Setting the src attribute of the img element
		iconImg.alt = `Weather condition: ${condition}`;
		header.innerText = `Current Weather in ${location}`;
	}
</script>
</body>
<footer>
	<table class="footer-table">
		<tr>
			<td>
				<div class="footer-box">
					<div class="footer-logo">Main options</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com/store/index.php">Home</a></li>
						<li><a href="https://ign0r3.com/store/products.php">Products</a></li>
						<li><a href="https://ign0r3.com/store/contact.php">Contact Us</a></li>
						<li><a href="https://ign0r3.com/store/about.php">About Us</a></li>
					</ul>
				</div>
			</td>
			<td>
				<div class="footer-box">
					<div class="footer-logo">My other projects</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com">Main</a></li>
						<li><a href="https://ign0r3.com/college/" target="_blank">College website</a></li>
						<li><a href="https://ign0r3.com/till/" target="_blank">Microtill Till</a></li>
						<li><a href="https://ign0r3.com/download/">Download</a></li>
						<li><a href="https://ign0r3.com/store/index.php">Store</a></li>
					</ul>
				</div>
			</td>
			<td>
				<div class="footer-box">
					<div class="footer-logo">Products</div>
					<ul class="footer-links">
						<li><a href="https://ign0r3.com/store/products/shop.php">Shop web page</a></li>
						<li><a href="https://ign0r3.com/store/products/course.php">Online Courses</a></li>
						<li><a href="https://ign0r3.com/store/products/streaming.php">Online streaming site</a></li>
					</ul>
				</div>
			</td>
			<td>
				<div class="footer-box">
					<div class="footer-logo">Contact me</div>
					<ul class="footer-links">
						<li><a>Email: contact@ign0r3.com</a></li>
						<li><a href="https://ign0r3.com/store/contact.php">Message me</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
    <p>&copy; 2024 Ign0r3.com. All rights reserved.</p>
</footer>
</html>
