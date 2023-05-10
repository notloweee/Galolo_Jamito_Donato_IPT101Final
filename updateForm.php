<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #bdffc8;
        }
        h2 {
        color: #333;
        text-align: center;
        margin-top: 50px;
        }
    
        form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    
        label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
        }
    
        input[type="text"],
        input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    
        input[type="submit"] {
        display: block;
        margin: 10px auto;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        
        }
    
        input[type="submit"]:hover {
        background-color: #555;
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
    <h2>Change Password</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Update Password">
        </form> 
        <input type="button" value="Go Back" onclick="history.back()" class="back-button">
</body>
</html>


<?php
// Establish a connection to the database
@include 'config.php';

session_start();


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate input data
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Update the password in the database
    $sql = "UPDATE userform SET password='$password' WHERE email='$email'";

    echo "<center>";    echo "<br>";
    if (mysqli_query($conn, $sql)) {
        echo "Password updated successfully";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
}
echo "</center>";
mysqli_close($conn);
?>
