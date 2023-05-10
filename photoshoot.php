<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'photoshoot';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Photo Shoot Form</title>
	<style type="text/css">

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
		form {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f4f4f4;
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"], input[type="email"], input[type="date"], select, textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        input[type="button"] {
			cursor: pointer;
			display: block;
  			margin: 0 auto;
			margin-top: 20px;
		}
	</style>
</head>
<body>
    <h1>Photography Booking</h1>
	<form method="post" action="insertbook.php">
        <label for="id">ID:</label>
		<input type="text" id="id" name="id" required>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone" required>

		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required>

		<label for="location">Location:</label>
		<select id="location" name="location" required>
			<option value="">Select a location</option>
			<option value="Indoor">Indoor</option>
			<option value="Outdoor">Outdoor</option>
		</select>

		<label for="message">Message:</label>
		<textarea id="message" name="message"></textarea>

		<input type="submit" value="Submit">
	</form>
    <input type="button" value="Go Back" onclick="history.back()" class="back-button">
</body>
</html>
