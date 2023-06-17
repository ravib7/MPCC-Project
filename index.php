<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Components/CSS/style.css">
    <title>Upload Image</title>

<style>

.button a {
    padding: 7px 20px;
    margin-left: 60%;
    color: #000;
    text-decoration: none;
    background:cyan;
    border: 1px solid black;
}

.button a:hover {
    background:whitesmoke;
}

</style>

</head>
<body>

<!-------------------Heading-img----------------------->
<div class="container-fluid">
	<div class="headline">
		<img src="Components/Images/top image.png" alt="Top Image">
		<!-- <h3>सत्यम‍ेव जयते</h3> -->
	</div>
</div>
<!-------------------Heading-img----------------------->

<!-------------------------button-start---------------------------->

<div class="button">
    <a href="view.php">Home</a>
    <a href="" style="margin:70% 2%;">Logout</a>
</div>      

<!-------------------------button-End---------------------------->

      <?php if (isset($_GET['error'])): ?> 
      <p><?php echo $_GET['error']; ?></p>   
<?php endif ?>

<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="image">

<input type="submit" name="submit" value="Upload">


</form>

</body>
</html>