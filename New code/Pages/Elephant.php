<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../CSS/styles.css">
        <title>Elephant - Riget Zoo Adventures</title>
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
        <div class="body-animal-image">
            <img src="../Images/elephant_image.jpg" alt="Lion">
        </div>
        <div class="body-animal-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames. Varius sit amet mattis vulputate enim nulla. Non sodales neque sodales ut etiam sit amet. Mi proin sed libero enim sed faucibus turpis in eu. Nibh sed pulvinar proin gravida hendrerit. Nunc lobortis mattis aliquam faucibus purus in. Vitae aliquet nec ullamcorper sit amet risus nullam. Eros donec ac odio tempor orci dapibus ultrices. Est ante in nibh mauris. Leo a diam sollicitudin tempor id eu. Nunc sed id semper risus. Turpis nunc eget lorem dolor sed. Dictum fusce ut placerat orci nulla. Dictum sit amet justo donec. Praesent semper feugiat nibh sed pulvinar proin gravida. Morbi tempus iaculis urna id volutpat lacus laoreet non curabitur. Sagittis eu volutpat odio facilisis mauris sit amet. Amet commodo nulla facilisi nullam vehicula.
            </p>
            <p>Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Purus gravida quis blandit turpis cursus in hac. Urna id volutpat lacus laoreet non curabitur gravida arcu. Vitae tortor condimentum lacinia quis. Facilisis sed odio morbi quis. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Lorem mollis aliquam ut porttitor leo. Aliquet bibendum enim facilisis gravida. Vitae congue eu consequat ac felis. Mi ipsum faucibus vitae aliquet. Placerat vestibulum lectus mauris ultrices eros in. Lectus arcu bibendum at varius vel pharetra vel turpis. Nunc id cursus metus aliquam eleifend mi. Massa sapien faucibus et molestie ac feugiat sed lectus. Et magnis dis parturient montes nascetur ridiculus. Non curabitur gravida arcu ac tortor dignissim convallis aenean et. Sapien nec sagittis aliquam malesuada bibendum arcu.
            </p>
            <p>Dignissim sodales ut eu sem integer vitae. Vel eros donec ac odio tempor orci dapibus ultrices. Nisl suscipit adipiscing bibendum est ultricies integer. Risus pretium quam vulputate dignissim suspendisse in. Tristique senectus et netus et malesuada fames ac turpis egestas. In iaculis nunc sed augue lacus viverra. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Urna cursus eget nunc scelerisque. Vel quam elementum pulvinar etiam. Vitae ultricies leo integer malesuada nunc. Senectus et netus et malesuada. Etiam non quam lacus suspendisse faucibus. Volutpat sed cras ornare arcu dui vivamus arcu felis bibendum. Justo nec ultrices dui sapien.
            </p>
            <p>Urna nec tincidunt praesent semper feugiat nibh sed pulvinar proin. Donec enim diam vulputate ut pharetra sit. Et malesuada fames ac turpis egestas sed tempus urna. Nisi est sit amet facilisis magna etiam. Eget arcu dictum varius duis at. Cras fermentum odio eu feugiat pretium. Ac tortor dignissim convallis aenean et tortor. Sodales neque sodales ut etiam. Ultrices eros in cursus turpis massa tincidunt dui ut. Curabitur gravida arcu ac tortor. Eu scelerisque felis imperdiet proin fermentum leo vel. Massa vitae tortor condimentum lacinia quis vel eros donec. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus a. Neque sodales ut etiam sit amet nisl purus in mollis. Ullamcorper velit sed ullamcorper morbi.
            </p>
            <p>Enim nec dui nunc mattis enim ut. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Quis ipsum suspendisse ultrices gravida dictum fusce. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Morbi leo urna molestie at elementum eu facilisis sed. Fermentum leo vel orci porta non pulvinar neque. Sit amet nulla facilisi morbi. Nullam non nisi est sit amet. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Aliquam sem et tortor consequat. Aliquet nibh praesent tristique magna sit. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Id donec ultrices tincidunt arcu non sodales neque sodales. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Lorem dolor sed viverra ipsum nunc aliquet. Purus viverra accumsan in nisl nisi. Arcu non sodales neque sodales ut etiam. Facilisi cras fermentum odio eu feugiat pretium nibh.
            </p>    
        </div>
    
</body>
</head>
</html>