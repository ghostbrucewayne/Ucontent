<?php
require('connection.php');
if(!isset($_COOKIE['email'])) {
    echo "Cookie named is not set!";
} else {
   // echo "Cookie is set!<br>";
    //echo "Value is: " . $_COOKIE['email'];
    $email="". $_COOKIE['email'];
}
$contenttype=$_POST['contenttype'];
$content=$_POST['content'];
$sql1="insert into contentadd(contenttype,content,email)values('$contenttype','$content','$email')";
mysqli_query($conn,$sql1);
$affected=mysqli_affected_rows($conn);

if($affected>0){
	exit(header ("location: /index1.html"));
//	echo "Successful";
}
else{
echo "failed";
echo mysqli_error($conn);
}
?>