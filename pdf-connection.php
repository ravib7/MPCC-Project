<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$filename = $_FILES["pdfFile"]["name"];
$fileTmpName = $_FILES["pdfFile"]["tmp_name"];
$targetDirectory = "PDF-uploads/";
$targetFile = $targetDirectory . $filename;

if (move_uploaded_file($fileTmpName, $targetFile)) {
    $sql = "INSERT INTO pdf_files (filename, filepath) VALUES ('$filename', '$targetFile')";
    if ($conn->query($sql) === TRUE) {
        $message = "PDF uploaded and saved in the database.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $message = "Error uploading the PDF";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

$conn->close();
?>
