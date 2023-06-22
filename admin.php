<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Components\CSS\admin_page.css">
</head>
<body>

<nav class="navbar">
    <ul>
      <li><a href="view.php">Home</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Uploads</a>
        <div class="dropdown-content">
          <a href="#" data-target="option1">Top-Image Upload</a>
          <a href="#" data-target="option2">Image-Slide Upload</a>
          <a href="#" data-target="option3">GR Upload</a>
        </div>
      </li>
      <li><a href="#" id="downloadLink">Data Download</a></li>
      <li><a href="view.php" target="_blank">Logout</a></li>
    </ul>
  </nav>

<div id="content">
  
  <div id="option1" class="page" style="margin-left:40%;">

  <h1>Top Image Upload</h1>

  <p>max-width: 100%;<br>
     width: 100%;<br>
     max-height: 362px; </P>

  <?php if (isset($_GET['error'])): ?> 
      <p><?php echo $_GET['error']; ?></p>   
  <?php endif ?>

  <form action="upload.php" method="post" enctype="multipart/form-data">

  <input type="file" name="image">

  <input type="submit" name="submit" value="Upload">

  </form>

  </div>

<!---------------------Option-2--------------------->

  <div id="option2" class="page" style="margin-left:40%;">

  <h1>Image Slide Upload</h1>

  <p>max-width: 97%;<br>
     width: 100%;<br>
     height: 500px;
  </P>
  
  <?php if (isset($_GET['error'])): ?> 
      <p><?php echo $_GET['error']; ?></p>   
  <?php endif ?>

  <form action="upload-image_slide.php" method="post" enctype="multipart/form-data">

  <input type="file" name="image">

  <input type="submit" name="submit" value="Upload">

  </form>
  </div>

 <!---------------------Option-3--------------------->

  <div id="option3" class="page"  style="margin-left:35%;">
    
  <form action="pdf-upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="pdfFile" accept=".pdf">
  <input type="submit" value="Upload PDF">
</form>

  </div>

  

   <div id="Logout" class="page">
    <!-- Contact content here -->
  </div>
</div>

  
  <!-- Your page content goes here -->
  
  <script src="Components\JS\script.js"></script>
</body>
</html>
