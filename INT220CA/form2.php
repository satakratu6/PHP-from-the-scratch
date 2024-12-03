<?php
if(isset($_FILES["image"])){
  $file_name=$_FILES['image']['name'];
  $tmp_name=$_FILES['image']['tmp_name'];
  $type=$_FILES['image']['type'];
  if(move_uploaded_file($tmp_name,"upload",$file_name)){
    echo "Succesfull";
  } else{
    echo "not succesfull";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
  </form>
</body>
</html>