<?php
$connect = new mysqli('localhost','root','','moviedb');
if($connect->connect_error){
die('connection failed bruh');
} 
else
{
echo 'connect worked';
}
$uname= $_POST['name'];
$pass= $_POST['password'];

$sql="SELECT * from adminlogin where name='$uname' AND pass='$pass'";

$result= $connect->query($sql);

if ($result-> num_rows>0){
while($row=$result->fetch_assoc()){
echo "Admin name is:" . $row["name"];
header("location:admin.php");
}
}
else {
echo "Username and password don't match";
header("location:login.html");
}
?>
