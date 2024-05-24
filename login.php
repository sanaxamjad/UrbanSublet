<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "database"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Perform SQL query to check if the username and password match a record in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check if a row was returned
if ($result->num_rows > 0) {
    // User authenticated successfully
    echo "Welcome, $username!";
} else {
    // Authentication failed
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
?>
