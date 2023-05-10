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

// Retrieve the bookings from the database
$query = "SELECT * FROM bookform";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Bookings</title>
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

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 1400px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

th {
  background-color: #4CAF50;
  color: white;
  text-align: left;
  padding: 15px;
}

td {
  padding: 15px;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f2f2f2;
}

td:last-child {
  text-align: center;
}

a {
  text-decoration: none;
  color: #4CAF50;
}

a:hover {
  text-decoration: underline;
}
.edit-btn {
  display: inline-block;
  background-color: #4CAF50;
  color: white;
  padding: 6px 12px;
  border-radius: 3px;
  transition: background-color 0.3s;
}

.edit-btn:hover {
  background-color: #3E8E41;
}

.delete-btn {
  display: inline-block;
  background-color: #f44336;
  color: white;
  padding: 6px 12px;
  border-radius: 3px;
  transition: background-color 0.3s;
  margin-left: 10px;
}

.delete-btn:hover {
  background-color: #d32f2f;
}
input[type="button"] {
			cursor: pointer;
			display: block;
  			margin: 0 auto;
			margin-top: 20px;
		}
</style>
<body>
    <h1>View Bookings</h1>
    <table>
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Location</th>
            <th>Message</th>
            <th style="text-align: center">Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td style="text-align: center">
                    <a class="edit-btn" href="editbook.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="delete-btn" href="deletebook.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <input type="button" value="Go Back" onclick="window.location.href='homePage.php';" class="back-button">
</body>
</html>

<?php
// Free the result set and close the connection
mysqli_free_result($result);
mysqli_close($conn);
?>
