<?php

$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual MySQL password
$database = "mtt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set character set and other configurations here
// mysqli_set_charset($conn, "utf8");

echo "Connected successfully";

// Close the connection when done with database operations
// $conn->close();

?>