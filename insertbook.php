<?php
// Connect to database

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'photoshoot';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$location = $_POST['location'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO bookform (id, name, email, phone, date, location, message) VALUES ('$id', '$name', '$email', '$phone', '$date', '$location', '$message')";
if ($conn->query($sql) === TRUE) {
    header('Location: photoshoot.php');
    echo "Appointment booked successfully.";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
