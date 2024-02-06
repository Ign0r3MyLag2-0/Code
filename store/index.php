<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Ign0r3.com</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/logo.png">
	<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AklD4TawvHHdo9Odz15zKMEXscQ3lp_3XOatdc8aXFX9iXC3rmueVflMOCOf6ipc&callback=loadMapScenario' async defer></script>
	
<header>
	<div class="header-logo">
		<div class="dropdown">
			<img src="./images/logo.png" alt="Logo" height="100px" width="120px">
				<div class="dropdown-content">
					<li><a href="https://ign0r3.com/store/login.php">Account</a></li>
					<li><a href="https://ign0r3.com/store/index.php">Store home</a></li>
					<li><a href="https://ign0r3.com/store/products.php">Products</a></li>
					<li><a href="https://ign0r3.com/store/contact.php">Contact Us</a></li>
					<li><a href="https://ign0r3.com/store/about.php">About Us</a></li>
				</div>
		</div>
	</div>

	<h1>Welcome to Ign0r3.com/store</h1>
	
	<a href="https://ign0r3.com/store/basket.php" class="header-logo-right">
		<img class="dropbtn" src="./images/cart.png" alt="Menu" height="70px" width="70px">
	</a>
	
</header>
</head>
<body>
<div class="body-headertext">
	<h1> Welcome to Ign0r3.com/Shop - Your Gateway to Customized Excellence! </h1>
</div>
<div class="body-offers">
	<h2>Offers!<h2>
	<table class="body-table">
		<tr>
			<td class="body-offer-product">
				<img src="./images/onlinestore.png" alt="Shop web page" height="100px" width="150px">
				<h3>Shop web page</h3>
				<p>This is a online shop that can be custom made under your specifications*<p>
				<p>Price £25*<p>
				<a href="https://ign0r3.com/store/products/shop.php">Click here</a>
				
			<td class="body-offer-product">
				<img src="./images/onlinecourse.png" alt="Online Courses" height="100px" width="150px">
				<h3>Online Courses</h3>
				<p>This is a online course web page you can add pictures and videos to your specifications*<p>
				<p>Price £25*<p>
				<a href="https://ign0r3.com/store/products/course.php">Click here</a>
			</td>
			<td class="body-offer-product">
				<img src="./images/onlinestreaming.png" alt="Online streaming site" height="100px" width="150px">
				<h3>Online streaming site</h3>
				<p>This is a online streaming site that you can add movies too*<p>
				<p>Price £25*<p>
				<a href="https://ign0r3.com/store/products/streaming.php">Click here</a>
			</td>
		</tr>
	</table>
</div>
<div class="body-homemap">
	<div id="myMap" style="width: 100%; height: 400px;"></div>
</div>
<script async defer>
        function loadMapScenario() {
    var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
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
                        title: 'Ign0r3.com HQ Location',
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
