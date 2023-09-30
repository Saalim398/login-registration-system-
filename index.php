<?php
include "config.php"; // including the configure file 
$username = $_POST['username'];
$password = $_POST['password'];


//inorder to prevent mysql injection use
$username = stripcslashes($username);  
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);    

//prepare a query
$sql = "select * from user_info where username = '$username' and password = '$password";
$result = mysqli_query($conn, $sql); 

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  //returns the associative array
$count = mysqli_num_rows($result); 
if ($count == 1){
  header('location : welcome.php');
} 
else{
  echo "invalid username or password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <form action="index.php"  method="post">
    
    <center>

      <label><b>username</b></label>
      <br>
      <br>
      <input type="text" name="uname" id="uname" placeholder="Enter username">
    </center>
    <br>
    <br>
    <center>

      <label><b>password</b></label>
      <br>
      <br>
      <input type="password" name="pass" id="pass" placeholder="Enter Password">
    </center>
    <br>
    <br>
    <center>

      <button>Login</button>
    </center>
  </form>
  </div>
</body>
</html>