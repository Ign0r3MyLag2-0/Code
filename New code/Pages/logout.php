<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Log out - Riget Zoo Adventures</title>
        <link rel="icon" type="image/x-icon" href="../Images/short_logo.png">
        <meta http-equiv="refresh" content="2; url='http://localhost'" />
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
<?sql
	session_destroy ();
?>

<div class="body-logout-text">
    <a href="./login.php">If you are not automaticaly redirected after 5 seconds please click here</a>
</div>
</body>
</head>
</html>