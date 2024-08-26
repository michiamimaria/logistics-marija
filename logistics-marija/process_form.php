<?php
// Database credentials
$host = 'localhost'; // or your database host
$db = 'your_database'; // replace with your database name
$user = 'your_username'; // replace with your database username
$pass = 'your_password'; // replace with your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Execute the statement
if ($stmt->execute()) {
    $success = "Your submission was successful.";
} else {
    $error = "There was an error with your submission.";
}

// Close connections
$stmt->close();
$conn->close();

// Redirect back to the form with success message
header("Location: index.php?status=success");
exit();
?>
