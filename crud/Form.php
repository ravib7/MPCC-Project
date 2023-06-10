
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
        <label for="name">Full Name :</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div> 

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group">
                <label>Gender :</label>
                <select class="form-control" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
      </div>

      <div class="form-group">
      <label for="birthday">Data of birth:</label>
      <input type="date" class="form-control" id="birthday" name="birthday">
      </div> 

      <div class="form-group">
        <label for="phone">Phone no. :</label>
        <input type="phone" class="form-control" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="phone">Alternate Phone no. :</label>
        <input type="phone" class="form-control" id="ahone" name="aphone">
       </div>

       <div class="form-group">
        <label for="taluka">Taluka :</label>
        <input type="text" class="form-control" id="taluka" name="taluka" required>
       </div>

       <div class="form-group">
        <label for="district">District :</label>
        <input type="text" class="form-control" id="district" name="district" required>
       </div>

       <div class="form-group">
        <label for="state">State :</label>
        <input type="text" class="form-control" id="state" name="state" required>
       </div>

       <div class="form-group">
        <label for="aadhaar">Aadhaar card no. :</label>
        <input type="number" class="form-control" id="aadhaar" name="aadhaar" required>
       </div>

       <div class="form-group">
        <label for="address">Complete Address :</label>
        <input type="text" class="form-control" id="address" name="address" required>
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
    $name                 =  $_POST['name']; 
    $email                =  $_POST['email'];
    $gender               =  $_POST['gender'];
    $birthday             =  $_POST['birthday'];
    $phone                =  $_POST['phone'];
    $aphone         	    =  $_POST['aphone']; 
    $taluka         	    =  $_POST['taluka']; 
    $district         	  =  $_POST['district']; 
    $state         	      =  $_POST['state']; 
    $aadhaar         	    =  $_POST['aadhaar']; 
    $address         	    =  $_POST['address']; 
    // $photo          =  $_FILES['photo']['name'];

    $query = "INSERT INTO crud (name, email, gender, birthday, phone, aphone, taluka, district, state, aadhaar, address) 
    VALUES('$name', '$email', '$gender', '$birthday', '$phone', '$aphone', '$taluka', '$district', '$state', '$aadhaar', '$address' )";

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


   
// // File upload
// $targetDir = "uploads/";
// $targetFile = $targetDir . basename($_FILES['photo']['name']);
// $uploadOk = 1;
// strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// // Check if image file is a valid image
// if(isset($_POST['submit'])) {
//   $check = getimagesize($_FILES['photo']['tmp_name']);
//   if($check !== false) {
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($targetFile)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size (limit to 2MB)

// if ($_FILES['photo']['size'] > 2 * 1024 * 1024) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow only certain file formats
//  $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
// if (!in_array($imageFileType, $allowedExtensions)) {
//   // echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
//   $uploadOk = 0;
// }

// // If file upload is successful, move the file to the target directory
// if ($uploadOk == 1) {
//   if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
//     echo "The file " . basename($_FILES['photo']['name']) . " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }




?>