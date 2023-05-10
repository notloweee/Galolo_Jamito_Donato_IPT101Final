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

// Get ID of record to delete
$id = $_GET['id'];

// Delete record from database
$sql = "DELETE FROM bookform WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.";
    // Redirect back to the previous page
    header('Location: displaybook.php');

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
