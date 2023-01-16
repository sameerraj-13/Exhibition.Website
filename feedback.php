<?php
include("connection.php");
error_reporting(0);
$na=$_GET['name'];
error_reporting(0);
$em=$_GET['email'];
error_reporting(0);
$mes=$_GET['message'];

$query="INSERT INTO `feedbackdb` (`name`, `email`, `message`) VALUES ('$na', '$em', '$mes')";
$data=mysqli_query($conn, $query);

if($data)
{
	error_reporting(0);
	header ("location: ./index.html");
	echo "Data Inserted Into Database Successfully";
}
else
{
	echo "Failed to insert Data into Database";
}	
?>