<?php  

session_start();
require('db_connect.php');


$user = $_POST['username'];
$password = $_POST['password'];


$check = "SELECT * FROM user WHERE username='$user' and password='$password'";
$result = mysqli_query($connection, $check) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if($count==1){

	echo "Login Successful";
	header('Location: home.html');
}


else
{
	echo"check username and password";
	header('Location: check_pass.html');
}



?>