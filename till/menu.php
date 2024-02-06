<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Till</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body>
	<a href="./index.html">
		<img src="./images/theme_logo.png" alt="Logo" height="100px" width="100px">
	</a>
	
	<table class="options">
		<ul id="menu">
			<p>Starter</p>
				<li class="menuitem" data-name="Frys" data-price="2.99">Frys - £2.99</li>
				<li class="menuitem" data-name="Mozarella Sticks" data-price="3.50">Mozarella sticks - £3.50</li>
				<li class="menuitem" data-name="Salad" data-price="4">Salad - £4</li>
				<li class="menuitem" data-name="Caprese Salad" data-price="6">Caprese Salad - £6</li>
				<li class="menuitem" data-name="Bruschetta" data-price="5">Bruschetta - £5</li>
				<li class="menuitem" data-name="Garlic Shrimp" data-price="7">Garlic Shrimp - £7</li>
				<li class="menuitem" data-name="Spring Rolls" data-price="5">Spring Rolls - £5</li>
				<li class="menuitem" data-name="Tomato Soup" data-price="4">Tomato Soup - £4</li>
				<li class="menuitem" data-name="Stuffed Mushrooms" data-price="6">Stuffed - Mushrooms £6</li>
				<li class="menuitem" data-name="Chicken Satay" data-price="6">Chicken Satay - £6</li>
				<li class="menuitem" data-name="Spinach and Artichoke Dip" data-price="5">Spinach and Artichoke Dip - £5</li>
				<li class="menuitem" data-name="Prawn Cocktail" data-price="7">Prawn Cocktail - £7</li>
				<li class="menuitem" data-name="Deviled Eggs" data-price="4">Deviled Eggs - £4</li>

			<p>Main</p>
				<li class="menuitem" data-name="Grilled Salmon" data-price="12">Grilled Salmon - £12</li>
				<li class="menuitem" data-name="Chicken Alfredo Pasta" data-price="10">Chicken Alfredo Pasta - £10</li>
				<li class="menuitem" data-name="Beef Stir-Fry" data-price="11">Beef Stir-Fry - £11</li>
				<li class="menuitem" data-name="Vegetable Curry" data-price="9">Vegetable Curry - £9</li>
				<li class="menuitem" data-name="Roast Chicken" data-price="10">Roast Chicken - £10</li>
				<li class="menuitem" data-name="BBQ Ribs" data-price="12">BBQ Ribs - £12</li>
				<li class="menuitem" data-name="Mushroom Risotto" data-price="9">Mushroom Risotto - £9</li>
				<li class="menuitem" data-name="Tofu Pad Thai" data-price="10">Tofu Pad Thai - £10</li>
				<li class="menuitem" data-name="Steak with Mashed" data-price="15">Potatoes Steak with Mashed Potatoes - £15</li>
				<li class="menuitem" data-name="Eggplant Parmesan" data-price="9">Eggplant Parmesan - £9</li>

			<p>Desert</p>
				<li class="menuitem" data-name="Chocolate Lava Cake" data-price="6">Chocolate Lava Cake - £6</li>
				<li class="menuitem" data-name="Cheesecake" data-price="5">Cheesecake - £5</li>
				<li class="menuitem" data-name="Tiramisu" data-price="6">Tiramisu - £6</li>
				<li class="menuitem" data-name="Apple Pie" data-price="5">Apple Pie - £5</li>
				<li class="menuitem" data-name="Crème Brûlée" data-price="6">Crème Brûlée - £6</li>
				<li class="menuitem" data-name="Fruit Tart" data-price="5">Fruit Tart - £5</li>
				<li class="menuitem" data-name="Panna Cotta" data-price="6">Panna Cotta - £6</li>
				<li class="menuitem" data-name="Baklava" data-price="5">Baklava - £5</li>
				<li class="menuitem" data-name="Lemon Bars" data-price="5">Lemon Bars - £5</li>
				<li class="menuitem" data-name="Red Velvet" data-price="6">Cake Red Velvet Cake - £6</li>

			<p>Soft drinks</p>
				<li class="menuitem" data-name="Coca-Cola" data-price="2">Coca-Cola - £2</li>
				<li class="menuitem" data-name="Pepsi" data-price="2">Pepsi - £2</li>
				<li class="menuitem" data-name="Sprite" data-price="2">Sprite - £2</li>
				<li class="menuitem" data-name="Fanta" data-price="2">Fanta - £2</li>
				<li class="menuitem" data-name="Dr. Pepper" data-price="2">Dr. Pepper - £2</li>

			<p>Alcahol</p>
				<li class="menuitem" data-name="Margarita" data-price="7">Margarita - £7</li>
				<li class="menuitem" data-name="Old Fashioned" data-price="8">Old Fashioned - £8</li>
				<li class="menuitem" data-name="Mojito" data-price="7">Mojito - £7</li>
				<li class="menuitem" data-name="Cosmopolitan" data-price="7">Cosmopolitan - £7</li>
				<li class="menuitem" data-name="Martini" data-price="8">Martini - £8</li>
				<li class="menuitem" data-name="Sangria" data-price="6">Sangria - £6</li>
				<li class="menuitem" data-name="Whiskey Sour" data-price="7">Whiskey Sour - £7</li>
				<li class="menuitem" data-name="Moscow Mule" data-price="6">Moscow Mule - £6</li>
				<li class="menuitem" data-name="Mimosa" data-price="6">Mimosa - £6</li>
				<li class="menuitem" data-name="Gin and Tonic" data-price="6">Gin and Tonic - £6</li>
				<li class="menuitem" data-name="Rum Punch" data-price="7">Rum Punch - £7</li>
				<li class="menuitem" data-name="White Russian" data-price="7">White Russian - £7</li>
				<li class="menuitem" data-name="Mai Tai" data-price="7">Mai Tai - £7</li>
				<li class="menuitem" data-name="Pina Colada" data-price="7">Pina Colada - £7</li>
				<li class="menuitem" data-name="Irish Coffee" data-price="6">Irish Coffee - £6</li>
		</ul>

		<div id="display"></div>
		<button id="clearBtn">Clear</button>

		<script>
		// Object to store selected items and their quantities
		const selectedItems = {};

		// Get all the menu items
		const menuItems = document.querySelectorAll('#menu li');
		let totalPrice = 0;

		// Loop through each menu item and add a click event listener
		menuItems.forEach(item => {
  		item.addEventListener('click', () => {
    		const itemName = item.dataset.name;
    		const itemPrice = parseFloat(item.dataset.price);

    		// If the item exists in the selectedItems, increase its quantity, else add it
    		if (selectedItems[itemName]) {
      		selectedItems[itemName].quantity++;
			selectedItems[itemName].totalPrice += itemPrice;
			} else {
			selectedItems[itemName] = {
				quantity: 1,
				totalPrice: itemPrice,
			};
			}

			// Update the total price
			totalPrice += itemPrice;

			// Display the selected items and total price
			displaySelectedItems();
		});
		});

		// Clear button event listener
		document.getElementById('clearBtn').addEventListener('click', () => {
		// Clear selected items and reset total price
		Object.keys(selectedItems).forEach(item => {
			delete selectedItems[item];
		});
		totalPrice = 0;

		// Update display to show cleared items
		displaySelectedItems();
		});

		// Function to display selected items and total price
		function displaySelectedItems() {
		const display = document.getElementById('display');
		if (Object.keys(selectedItems).length === 0) {
			display.innerHTML = 'No items selected.';
		} else {
			display.innerHTML = `
			<h3>Selected Items:</h3>
			<ul>
				${Object.keys(selectedItems)
				.map(item => `<li>${item} x ${selectedItems[item].quantity} - £${selectedItems[item].totalPrice.toFixed(2)}</li>`)
				.join('')}
			</ul>
			<p>Total price: £${totalPrice.toFixed(2)}</p>`;
		}
		}
		</script>

		<?php
		require('db.php');

		if (isset($_REQUEST['Restaurant_code'])) {
			
			$Items_ordered = stripslashes($_REQUEST['Items_ordered']);
			$Items_ordered = mysqli_real_escape_string($con, $Items_ordered);
			
			$Price = stripslashes($_REQUEST['Price']);
			$Price = mysqli_real_escape_string($con, $Price);
			
			$Restaurant_code = stripslashes($_REQUEST['Restaurant_code']);
			$Restaurant_code = mysqli_real_escape_string($con, $Restaurant_code);

			$query = "INSERT into `orders` (Items_ordered, Price, Restaurant_code)
						VALUES ('$Items_ordered', '$Price', '$Restaurant_code')";

			$result = mysqli_query($con, $query);

			if ($result) {
				echo "<div class='form'>
				<h3>Order submitted.</h3>
				<br/>Click here to <a href='dashboard.php'>go back</a>
				</div>";
			} else {
				echo "<div class='form'> 
				<h3>Required fields are missing.</h3>
				</div>";
			}
		} else {

		?>

		<form action="" method="post">
			<h1 class="login-title">Subbmition</h1>
			<input type="text" class="login-input" name="Items_ordered" placeholder="Items ordered" required>
			<input type="decimal" class="login-input" name="Price" placeholder="Price number (no £)" required>
			<input type="int" class="login-input" name="Restaurant_code" placeholder="Store code" required>
			<input type="submit"  name="submit" value="submit" class="login-button">
		</form>

		<?php
		}
		?>

	<div class="footers1">
		<p>&copy; 2023 Microtill. All rights reserved.</p></td>	
    </div>
</body>
</html>