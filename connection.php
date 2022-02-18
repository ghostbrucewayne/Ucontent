<?php
	$host = "localhost";
    $username = "id11475309_form123";
    $password = "pass@123";
    $dbname = "id11475309_form123";

// Create connection
$conn = new mysqli($host, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>