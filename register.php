<?php
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$db = "mse23";
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Retrieve registration data from HTML form
$event_type = isset($_POST['eventType']) ? $_POST['eventType'] : '';
$sub_event_type = isset($_POST['subEventType']) ? $_POST['subEventType'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

// Insert registration data into the registration table
$query = "INSERT INTO Registration (event_type, sub_event_type, name, email, phone) VALUES ('$event_type', '$sub_event_type', '$name', '$email', '$phone')";
$result = $mysqli->query($query);

// Get the inserted registration ID
$registration_id = $mysqli->insert_id;

// Insert the specific event data into the corresponding event table
if ($event_type == 'indoor') {
    $table_name = 'indoor_event';
} elseif ($event_type == 'outdoor') {
    $table_name = 'outdoor_event';
} else {
    echo "Invalid event type.";
    exit;
}

$query = "INSERT INTO $table_name (event_id /* additional columns */) VALUES ('$registration_id' /* additional values */)";
$result = $mysqli->query($query);

if ($result) {
    echo "Registration successful!";
} else {
    echo "Registration failed. Please try again.";
}

// Close the database connection
$mysqli->close();
?>
