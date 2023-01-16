<?php
include("connection.php");
error_reporting(0);
$em=$_GET['email'];
error_reporting(0);
$pwd=$_GET['password'];

$query="INSERT INTO `register` (`email`, `password`) VALUES ('$em', '$pwd')";
$data=mysqli_query($conn, $query);

if($data)
{
	error_reporting(0);
	header ("location: ./register.html");
	echo "Data Inserted Into Database Successfully";
}
else
{
	echo "Failed to insert Data into Database";
}	
?>