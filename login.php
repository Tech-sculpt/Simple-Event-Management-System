<?php
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$db = "mse23";
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Retrieve login details from HTML form
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Query the database
$query = "SELECT * FROM admin WHERE username='$username'";
$result = $mysqli->query($query);

// Compare login details
if ($result && $result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Redirect to Display.php
        header("Location: Display.php");
        exit();
    }
}

// Invalid credentials, display error message
header("Location: admin.php");
exit();

// Close the database connection
$mysqli->close();
?>
