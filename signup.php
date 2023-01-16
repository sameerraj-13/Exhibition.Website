
<?php
include("connection.php");
error_reporting(0);
$us=$_GET['username'];
error_reporting(0);
$em=$_GET['emailaddress'];
error_reporting(0);
$pwd=$_GET['password'];
error_reporting(0);
$conpwd=$_GET['confirmpass'];

$query="INSERT INTO `signup` (`usernames`, `email`, `password`, `confirmpassword`) VALUES ('$us', '$em', '$pwd', '$conpwd')";
$data=mysqli_query($conn, $query);
if($data)
{
	error_reporting(0);
	header ("location: ./signupsubmit.html");
	echo "Data Inserted Into Database Successfully";
}
else
{
	echo "Failed to insert Data into Database";
}	

//$query="SELECT * FROM `studentdetaildb`";
//$data=mysqli_query($conn, $query);
//$num=mysqli_num_rows($data);
//echo $num;
//echo "    record found in the database<br><br>";
//if($num>0)
//{
	//	while ($row=mysqli_fetch_assoc($data))
	//	{
	//		echo var_dump($row);
	//		echo "<br>";
	//		echo "HELLO YOUR EMAIL ID IS  :     ".$row['email']."       AND    YOUR PASSWORD IS  :     ".$row['password'];
	//		echo"<br><br>";
	//	}
//}
?> 