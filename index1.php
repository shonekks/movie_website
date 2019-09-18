<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO register (name, email, pass) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location:login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>