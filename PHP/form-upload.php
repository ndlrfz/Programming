<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $file = $_FILES["file"];
    $allowed_types = ["image/jpeg", "image/png"];

    if (in_array($file["type"], $allowed_types)) {
        $destination = "uploads/".$file["name"];
        move_uploaded_file($file["tmp_name"], $destination);
        echo "The image is uploaded successfully";
    } else {
        echo "Error: Please select JPEG or PNG image format";
    }
}
?>

<!DOCTYPE html> <html lang="en">
<html>
<head>
  <meta charset="UTF-8">
  <title>Image submission form</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
      <label for="file">Select an image to send:</label>
      <input type="file" name="file" id="file" capture="Select
File">
      <input type="submit" value="Send">
   </form>
</body>
</html>
