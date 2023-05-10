<?php
// Connect to the database
$db_host = 'localhost';
$db_name = 'photoshoot';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check for errors
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Retrieve the booking to be edited
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM bookform WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Update the booking when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "UPDATE bookform SET name = '$name', email = '$email', phone = '$phone', date = '$date', location = '$location', message = '$message' WHERE id = '$id'";
    mysqli_query($conn, $query);

    header('Location: displaybook.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
</head>
<style>
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
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    max-width: 600px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 20px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

button[type="submit"]:focus {
    outline: none;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="date"]:focus,
textarea:focus {
    border: 2px solid #4CAF50;
}

.error {
    color: red;
    margin-bottom: 10px;
}

</style>
<body>
    <h1>Edit Booking</h1>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="<?php echo $row['phone']; ?>" required>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="<?php echo $row['date']; ?>" required>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?php echo $row['location']; ?>" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required><?php echo $row['message']; ?></textarea>

        <button type="submit">Update Booking</button>
    </form>
</body>
</html>

<?php
// Free the result set and close the connection
mysqli_free_result($result);
mysqli_close($conn);
?>
