<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>

</head>
<body>

<form action="pdf-upload-index.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="pdfFile" accept=".pdf">
  <input type="submit" value="Upload PDF">
</form>

</body>
</html>