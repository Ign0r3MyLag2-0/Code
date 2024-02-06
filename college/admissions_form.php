<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions form - BIODAT</title>
    <link rel="stylesheet" href="./CSS/styles.css">
	<link rel="icon" type="image/x-icon" href="./images/theme_logo.png">
</head>
<body>
	<div class ="header123">
		<table class="headertable">
			<tr>
				<td><img src="./images/theme_logo.png" alt="Logo" height="75px" width="100px"></td>
				<td><h1>Welcome to Basildon Institute Of Design And Technologies</h1></td>
				<td><a href="./login.php">
					<img src="./images/account.jpg" alt="account" height="75px" width="75px">
				</a></td>
			</tr>
		</table>
        <nav>
            <ul>
				<div class="homebutton">
					<li><a href="./index.html">Home</a></li>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Programs (On site)</button>
					<div class="dropdown-content">
						<li><a href="./courses/it_os.html">IT</a></li>
						<li><a href="./courses/Programming_os.html">Programming</a></li>
						<li><a href="./courses/cloud_production_os.html">Cloud production</a></li>
						<li><a href="./courses/digital_productions_os.html">Digital productions</a></li>
						<li><a href="./courses/esports_os.html">Esports</a></li>
						<li><a href="./courses/english_os.html">English</a></li>
						<li><a href="./courses/maths_os.html">Maths</a></li>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Programs (Online)</button>
					<div class="dropdown-content">
						<li><a href="./courses/it_ol.html">IT</a></li>
						<li><a href="./courses/Programming_ol.html">Programming</a></li>
						<li><a href="./courses/cloud_production_ol.html">Cloud production</a></li>
						<li><a href="./courses/digital_productions_ol.html">Digital productions</a></li>
						<li><a href="./courses/esports_ol.html">Esports</a></li>
						<li><a href="./courses/english_ol.html">English</a></li>
						<li><a href="./courses/maths_ol.html">Maths</a></li>
						<li><a href="./courses/AWS_ol.html">AWS</a></li>
						<li><a href="./courses/Cisco_ol.html">Cisco</a></li>
						<li><a href="./courses/MP_ol.html">Microsoft professional</a></li>
					</div>
				</div>

                <div class="dropdown">
					<button class="dropbtn">About Us</button>
					<div class="dropdown-content">
						<li><a href="about.html">About Us</a></li>
						<li><a href="mission.html">Our Mission</a></li>
						<li><a href="vision.html">Our Vision</a></li>
						<li><a href="values.html">Our Values</a></li>
						<li><a href="motto.html">Our Motto</a></li>
					</div>
				</div>
				
                <div class="dropdown">
					<button class="dropbtn">Admissions</button>
					<div class="dropdown-content">
						<li><a href="./admissions_form.php">Form</a></li>
					</div>
				</div>
				
				<div class="dropdown">
					<button class="dropbtn">Contact</button>
					<div class="dropdown-content">
						<li><a href="./contact.php">Email us</a></li>
						<li><a href="./contactpost.html">Post to us</a></li>
						<li><a href="https://www.snapchat.com/" target="_blank">
							<img src="./images/snaplogo.png" alt="Snapchat" height="75px" width="75px">
						</a></li>
						<li><a href="https://www.instagram.com/" target="_blank">
							<img src="./images/instalogo.png" alt="Instagram" height="75px" width="75px">
						</a></li>
						<li><a href="https://en-gb.facebook.com/" target="_blank">
							<img src="./images/facebooklogo.png" alt="Facebook" height="75px" width="75px">
						</a></li>
						<li><a href="https://twitter.com/?lang=en-gb" target="_blank">
							<img src="./images/xlogo.png" alt="Twitter" height="75px" width="75px">
						</a></li>
					</div>
				</div>
            </ul>
        </nav>
	</div>
	<section id="form">
		<h3>Admissions form</h3>
		<p>Please fill out this form to register your intrest at the Basildon Institute Of Design And Technologies<P> 
		<p>Thank you - BIODAT team<p>
		
		<div>
			<a href='index.html'>
				<button>Back</button>
			</a>
		</div><br>
		
	<?php
		require('db.php');

		if (isset($_REQUEST['name'])) {
		
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con, $name);
		
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con, $email);
	
		$DOB = stripslashes($_REQUEST['DOB']);
		$DOB = mysqli_real_escape_string($con, $DOB);
		
		$GCSE = stripslashes($_REQUEST['GCSE']);
		$GCSE = mysqli_real_escape_string($con, $GCSE);
		
		$english = stripslashes($_REQUEST['english']);
		$english = mysqli_real_escape_string($con, $english);
		
		$math = stripslashes($_REQUEST['math']);
		$math = mysqli_real_escape_string($con, $math);
		
		$NA = stripslashes($_REQUEST['NA']);
		$NA = mysqli_real_escape_string($con, $NA);
		
		$course = stripslashes($_REQUEST['course']);
		$course = mysqli_real_escape_string($con, $course);

		$query = "INSERT into `form` (name, email, DOB, GCSE, english, math, NA, course)
                VALUES ('$name', '$email', '$DOB', '$GCSE',  '$english', '$math', '$NA', 'course')";

		$result = mysqli_query($con, $query);

		if ($result) {
			echo "<div class='form'>
			<h3>Form subbmitted successfully.</h3>
			<br/>Click here to <a href='index.php'>Go to home.</a>
			</div>";
    } else {
        echo "<div class='form'> 
        <h3>Required fields are missing.</h3>
        <br/>Click here to <a href='admissions_form.php'>go back to the Form</a>
        </div>";
    }
} else {

?>
	<form action="" method="post">
		
		<label for="name">Full name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="DOB">DOB:</label>
		<input type="date" id="DOB" name="DOB" required></input><br><br>
			
		<label for="GCSE">GCSE grades:</label><br>
		<textarea type="text" id="GCSE" name="GCSE" rows="12" cols="50"></textarea><br><br>
			
		<label for="english">English grade:</label><br>
		<select name="english" id="english" >
			<option value="9">9</option>
			<option value="8">8</option>
			<option value="7">7</option>
			<option value="6">6</option>
			<option value="5">5</option>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			<option value="1">1</option>
			<option value="U">U</option>
			<option value="X">X</option>
		</select> <br><br>
		
		<label for="math">Math grade:</label><br>
		<select name="math" id="math" >
			<option value="9">9</option>
			<option value="8">8</option>
			<option value="7">7</option>
			<option value="6">6</option>
			<option value="5">5</option>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			<option value="1">1</option>
			<option value="U">U</option>
			<option value="X">X</option>
		</select> <br><br>

		<label for="NA">Tick if not passed yet:</label><br>
		<input type="checkbox" id="NA" name="NA"></input><br><br>
			
		<label for="course">Course your applying to:</label><br>
		<select name="course" id="course" required>
			<option value="ItOS">IT Onsite</option>
			<option value="ProgramingOS">Programing Onsite</option>
			<option value="CloudproductionOS">Cloud production Onsite</option>
			<option value="DigitalproductionsOS">Digital production Onsite</option>
			<option value="EsportsOS">Esports Onsite</option>
			<option value="EnglishOS">English Onsite</option>
			<option value="MathsOS">Maths Onsite</option>
			<option value="ProgramingOL">Programing Online</option>
			<option value="ITOL">Digital production Onsite</option>
			<option value="CloudproductionsOL">Cloud production Online</option>
			<option value="DigitalproductionsOL">Digital production Online</option>
			<option value="EsportsOL">Esports Online</option>
			<option value="EnglishOL">English Online</option>
			<option value="MathsOL">Maths Online</option>
			<option value="AWSOL">AWS Online</option>
			<option value="CiscoOL">Cisco Online</option>
			<option value="MicrosoftprofessionalOL">Microsoft professional Online</option>
		</select> <br><br>
		
		<input type="submit"  name="submit" value="Submit" class="login-button">
    </form>
		
<?php
	}
?>
	</section>
	<div class="footer123">
		<p>&copy; 2023 BIODAT. All rights reserved.</p>
	</div>
</body>
</html>