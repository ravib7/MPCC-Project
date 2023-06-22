
<style>
  /* Default styles for the iframe */
  iframe {
    display: block;
    width: 97%;
    height: 500px;
    margin-left: 20px;
    margin-top: 5px;
  }

  /* Media queries for different screen sizes */

  /* Extra Small Devices (portrait phones) */
  @media screen and (max-width: 575.98px) {
    iframe {
    width: 97%;
    height: 500px;
    margin-left:5.5px;
    margin-top: 5px;
    }
  }

  /* Small Devices (landscape phones) */
  @media screen and (min-width: 576px) and (max-width: 767.98px) {
    iframe {
    width: 97%;
    height: 500px;
    margin-left:5.5px;
    margin-top: 5px;
    }
  }

  /* Medium Devices (tablets) */
  @media screen and (min-width: 768px) and (max-width: 991.98px) {
    iframe {
    width: 96%;
    height: 500px;
    margin-left:16px;
    margin-top: 5px;    }
  }

  /* Large Devices (desktops) */
  @media screen and (min-width: 992px) and (max-width: 1199.98px) {
    iframe {
    width: 96%;
    height: 500px;
    margin-left:20px;
    margin-top: 5px;
    }
  }

  /* Extra Large Devices (large desktops) */
  @media screen and (min-width: 1200px) {
    iframe {
    width: 97%;
    height: 530px;
    margin-left:20px;
    margin-top: 5px;
    }
  }
</style>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT file_path FROM pdf_files ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pdfPath = $row["file_path"];
    echo "<iframe src='$pdfPath'></iframe>";
} else {
    echo "No PDF found.";
}

$conn->close();
?>
