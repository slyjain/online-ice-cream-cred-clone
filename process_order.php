<?php
// Retrieve form data
$flavor = $_POST['flavor'];
$cost = $_POST['cost'];
$name = $_POST['firstname'];
$phone = $_POST['phone'];
$address = $_POST['Address'];
$pincode = $_POST['PinCode'];

// Validate name
if (empty($name)) {
    $error = "Please enter your name.";
}

// Validate phone number
if (empty($phone)) {
    $error = "Please enter your phone number.";
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    $error = "Invalid phone number. Please enter a 10-digit phone number.";
}

// If there are any errors, redirect back to the form page with error message
if (isset($error)) {
    header("Location: index.html?error=" . urlencode($error));
    exit;
}

// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Store order details in the database
$sql = "INSERT INTO orders (flavor, cost, name, phone, address, pincode) VALUES ('$flavor', '$cost', '$name', '$phone', '$address', '$pincode')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
