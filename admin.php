<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Components/CSS/admin_page.css">
</head>

<body>
    
<nav>
    <a href="#first"><i class="#"></i>Top-Image</a>
    <a href="#second"><i class="#"></i>Image-Side</a>
    <a href="#third"><i class="#"></i>GR</a>
    <a href="#four"><i class="#"></i>Data Download</a>
</nav>

   <div class="container">
<!----------First-Option-Start--------->
    <section id="first">

    <p> max-width: 100%;<br>
        max-height: 450px;</p>
    <h1 style="color:#000; font-size: 30px; text-align:center; margin-top: -300px; margin-left: 200px;">
    Top Image Upload</h1>

    <?php if (isset($_GET['error'])): ?> 
     <p><?php echo $_GET['error']; ?></p>   
    <?php endif ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image">

    <input type="submit" name="submit" value="Upload">
    </form>
    </section>
<!----------First-Option-End--------->

<!----------Second-Option-Start--------->

    <section id="second">

         <p>max-width: 97%;<br>
            width: 100%;<br>
            height: 500px;</p>
    <h1 style="color:#000; font-size: 30px; text-align:center; margin-top: -300px; margin-left: 175px;">
     Image Slide Upload</h1>


    <?php if (isset($_GET['error'])): ?> 
    <p><?php echo $_GET['error']; ?></p>   
    <?php endif ?>

    <form action="upload-image_slide.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image">

    <input type="submit" name="submit" value="Upload">
    </form>
    </section>

<!----------Second-Option-Start--------->

<!----------Third-Option-Start--------->

    <section id="third">
        <h1>Third</h1>
    </section>

<!----------Third-Option-Start--------->

<!----------Four-Option-Start--------->

    <section id="four">
        <h1>Four</h1>
    </section>

<!----------Four-Option-Start--------->


   </div>

</body>
</html>