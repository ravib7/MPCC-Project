
<?php include("backend/database.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Business Application Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style-2.css">
</head>
<body>
  <div class="container">
    <h2>Business Application Form</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="phone" class="form-control" id="phone" name="phone" required>
      </div>
      <!-- <div class="form-group">
        <label for="photo">Upload Photo:</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
      </div> -->
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>
  </div>
</body>
</html>


<?php
if(isset($_POST['register'])) {
    $name     =  $_POST['name']; 
    $email    =  $_POST['email'];
    $password =  $_POST['password'];
    $phone =  $_POST['Phone'];
    // $photo    =  $_FILES['photo']['name'];

    $query = "INSERT INTO crud (name, email, password, Phone) 
    VALUES('$name', '$email', '$password', '$phone')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
           echo "<script>alert('Data Inserted into Database')</script>";
          
    }
    else
    {
        echo "<script>alert('Failed')</script>";
    }
    
    }


   
// File upload
// $targetDir = "uploads/";
// $targetFile = $targetDir . basename($_FILES['photo']['name']);
// $uploadOk = 1;
// strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a valid image
// if(isset($_POST['submit'])) {
//   $check = getimagesize($_FILES['photo']['tmp_name']);
//   if($check !== false) {
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
// if (file_exists($targetFile)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size (limit to 2MB)

// if ($_FILES['photo']['size'] > 2 * 1024 * 1024) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow only certain file formats
//  $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
// if (!in_array($imageFileType, $allowedExtensions)) {
  // echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
  // $uploadOk = 0;
// }

// If file upload is successful, move the file to the target directory
// if ($uploadOk == 1) {
//   if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
//     echo "The file " . basename($_FILES['photo']['name']) . " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

// Save the rest of the form data to a database or perform any other necessary operations
// ...

// Redirect to a success page or display a success message
// ...




?>