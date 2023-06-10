<?php
$servername = "43.205.118.178";
$username = "mpccuser";
$password = "Mpcc@user1";
$database = "mpcc";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run a test query
$sql = "SELECT 1";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === TRUE) {
    echo "Database connection is working.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
