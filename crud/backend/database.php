<?php
$servername = "localhost";
$username = "mpccuser";
$password = "Mpcc@user1";
$database = "mpcc";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful, run a test query
$query = "SELECT 1";
$result = $conn->query($query);

if ($result) {
    echo "Database connected successfully.";
} else {
    echo "Failed to connect to the database.";
}

// Close the connection
$conn->close();
?>
