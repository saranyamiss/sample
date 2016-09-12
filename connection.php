<?php

echo "welcome";
echo "csc";
echo "Iam a B.e graduate";
echo "Studied in gecb";
echo "hobbies";
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
