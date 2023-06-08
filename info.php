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

// Run queries or perform database operations here

$conn->close();
?>
