
<?php
include("connection.php");
$fn=$_GET['firstname'];
$ln=$_GET['lastname']; 
$cl=$_GET['class'];
$se=$_GET['section'];
$rn=$_GET['rollno'];
$bg=$_GET['bloodgroup'];
$dob=$_GET['dateofbirth'];
$pn=$_GET['phoneno'];
$em=$_GET['email'];
$pwd=$_GET['password'];
$gen=$_GET['gender1'];
$sub=$_GET['subject1'];
$top=$_GET['topic'];

$query="INSERT INTO `login` (`firstname`, `lastname`, `class`, `section`, `rollno`, `bloodgroup`, `dob`, `phone`, `email`, `password`, `gender`, `subject`, `topic`) VALUES ('$fn', '$ln', '$cl', '$se', '$rn', '$bg', '$dob', '$pn', '$em', '$pwd', '$gen', '$sub', '$top')";
$data=mysqli_query($conn, $query);

if($data)
{
	error_reporting(0);
	header ("location: ./registersubmit.html");
	echo "Data Inserted Into Database Successfully";
}
else
{
	echo "Failed to insert Data into Database";
}	

?> 