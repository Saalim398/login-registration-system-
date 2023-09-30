<?php

//defining the credientials inorder to connect to database
$host = 'localhost';
$user = 'root';
$password = '';
$database = "users";
$conn = mysqli_connect($host,$user,$password,$database);


//checking weather the connection is established with database or not 
//if no connection is established then it will retuen an error
if (!$conn) {
    die("ERROR : Cannot connect to the database");
}

?>