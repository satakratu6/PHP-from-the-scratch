<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername,$username,$password,$db);
if($_SERVER['REQUEST_METHOD']==="POST"){
  $name=htmlspecialchars($_POST['name']);
  $email=htmlspecialchars($_POST['email']);
  $password=htmlspecialchars($_POST['password']);
  $query="INSERT INTO FORM (name,email,password) values ('$name','$email','$password')";
  $result=mysqli_query($conn,$query);
  mysqli_close($conn);

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
  <form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <button type="submit" name="submit-data">Submit</button>
    
  </form>
</body>
</html>