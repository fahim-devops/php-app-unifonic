<?php
// index.php (Connects to MySQL)

// Retrieve database credentials from environment variables
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');

// Create connection to MySQL
$conn = new mysqli($host, $user, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Output welcome and connection messages
echo "Welcome to Unifonic!<br>";
echo "Connected to MySQL!";
?>