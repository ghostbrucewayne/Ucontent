<?php
	if( isset($_POST['email']) and isset($_POST['password']) ) {
		include('connection.php'); //code is given below (used for database connection)
		$email=$_POST['email'];
		$password=$_POST['password'];
 
		$ret=mysqli_query( $conn, "SELECT * FROM register WHERE email='$email' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			header("Location: login21.php");
		}
		else {
			$cookie_name = "email";
			$cookie_value = "".$email;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	        session_start();
	        $_SESSION['email']=$email;
			header('location: index1.html');
			echo "Successful";
			
		}
}
?>