<?php

session_start();
require('db_connect.php');

$f_name   = $_POST['f_name'];
$l_name   = $_POST['l_name'];
$username = $_POST['username'];
$gender   = $_POST['gender'];
$password = $_POST['password'];





$check = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($connection, $check) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


if ($count == 0)
{

$query1 = "INSERT INTO user VALUES ('$username','$f_name','$l_name','$gender','$password')";

if($connection->query($query1) === TRUE)
{
  echo"Data Successfully inserted";
}

else
{
  echo "not inserted";
}

}

else{

  echo "username already exists";
  header('Location: checkpass.html');
}


?>