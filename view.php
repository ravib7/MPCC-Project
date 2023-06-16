<?php include "connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>M.P.C.C</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" href="Components/CSS/navbar.css"> 
	  <link rel="stylesheet" href="Components/CSS/style.css">
	  <link rel="stylesheet" href="Components/CSS/about-us.css">
    <link rel="stylesheet" href="Components/CSS/image slide.css">
    <link rel="stylesheet" href="Components/CSS/events-&-news.css">
    <link rel="stylesheet" href="Components/CSS/sing in& signup.css">
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

    <!-------------------------Navbar-start---------------------------->

    <nav>
      <div class="logo">M.P.C.C</div>
      <label for="btn" class="icon">
        <span class="fas fa-bars"></span>
      </label> 
      <input type="checkbox" id="btn"> 
      <ul>
			<li><a href="view.php">Home</a></li>
        <li>

          <label for="btn-1" class="show">Application +</label>
          <a href="#">Application</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a  href="crud/Form.php">Business</a></li>
            <li><a  href="crud/Form.php">Job</a></li>
          </ul>
        </li>
        <li>

          <li><a href="events-&-news.html">Events&News</a></li>
          <li><a href="#">GR</a></li>
        <li>

          <label for="btn-2" class="show">Login +</label>
          <a href="#">Login</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a  href="signin.html">Sign in</a></li>
            <li><a  href="signup.html">Sign up</a></li>
          </ul>

            <li><a href="about-us.html">About us</a></li>
            <li><a href="contact-us.html">Contact us</a></li>
              </ul>
            </li> 
          </ul> 
        </li>
      </ul>
    </nav>          

<!-------------------------Navbar-End---------------------------->

<!--------------------------Image-Upload Start------------------->

<div class="container-fluid">
  <div class="upload-image">
  <?php 
          $sql = "SELECT * FROM upload ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($upload = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$upload['image_url']?>">
             </div>
          		
    <?php } }?>
  </div>
</div>
              
<!--------------------------Image-Upload End--------------------->

<!--------------------------Text-upload Start--------------------->

<div class="text-edit">
  <h2>महाराष्ट्र प्रदेश काँग्रेस कमिटी <br>
  (रोजगार व स्वयंरोजगार विभाग)</h2>
</div>

<!--------------------------Text-upload Start--------------------->

<!-------------------------Image-slide Heading Start-------------->

<div class="heading">
  <h2><b><i><u>विकास कामे</u></i></b></h2>
</div>

<!-------------------------Image-slide Heading End-------------------->

<!-------------------------Image-slide start-------------------------->

	<div class="image-slideshow">
		<div class="image fade">
			<img src="Components/Images/001.png" alt="Mountain Top">
			<div class="text">भारत जोडो यात्रा</div>
		</div>

		<div class="image fade">
			<img src="Components/Images/002.png" alt="Palm Trees">
			<div class="text">भारत जोडो यात्रा</div>
		</div>

		<div class="image fade">
			<img src="Components/Images/003.png" alt="Neon Sign">
			<div class="text">महाराष्ट्र प्रदेश काँग्रेस कमिटी </div>
		</div>

    
		<!-- <div class="image fade">
			<img src="Components/Images/004.png" alt="Palm Trees">
			<div class="text">भारत जोडो यात्रा</div>
		</div>

    
		<div class="image fade">
			<img src="Components/Images/005.png" alt="Palm Trees">
			<div class="text">भारत जोडो यात्रा</div>
		</div>


    
		<div class="image fade">
			<img src="Components/Images/006.png" alt="Palm Trees">
			<div class="text">भारत जोडो यात्रा</div>
		</div>
	</div> -->
	
	<!-------------------------Image-slide End-------------------------->

      <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
     	<script src="Components/JS/app.js"></script>



  
</body>
</html>