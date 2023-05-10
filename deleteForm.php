<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'login_system';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process delete request when the user submits the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's email address from the form
    $email = $_POST["email"];

    // Prepare a SQL statement to delete the user's account
    $sql = "DELETE FROM userform WHERE email = '$email'";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "Account deleted successfully.";
    } else {
        echo "Error deleting account: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<style>
		body {
			background-color: #bdffc8;
			font-family: Arial, sans-serif;
			padding: 20px;
		}

		h2 {
			color: #333;
			font-size: 24px;
			margin-bottom: 20px;
			text-align: center;
		}

		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: 0 auto;
			max-width: 400px;
			padding: 20px;
		}

		label {
			color: #333;
			display: block;
			font-size: 16px;
			margin-bottom: 10px;
		}

		input[type="text"] {
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"] {
			background-color: #333;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}

		form + form {
			margin-top: 20px;
			text-align: center;
		}

		form + form input[type="submit"] {
			background-color: #f9f9f9;
			border: 1px solid #333;
			color: #333;
			margin-top: 20px;
			padding: 10px;
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
	<h2>Delete Account</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="email">Email:</label>
		<input type="text" name="email" required><br><br>
		<input type="submit" value="Delete Account">
	</form>
	<input type="button" value="Go Back" onclick="history.back()" class="back-button">
</body>
</html>