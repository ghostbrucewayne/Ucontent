<?php
require("connection.php");

$title=$_POST['title'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql1="insert into register values('$title','$name','$email','$mobile','$password')";
mysqli_query($conn,$sql1);
$affected=mysqli_affected_rows($conn);
if($affected>0){
	$cookie_name = "email";
	$cookie_value = "".$email;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header('location: index.php');
	echo "Successful";
}
else{
echo "failed";
echo mysqli_error($conn);
}
?>