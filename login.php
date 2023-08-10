<?php
$servername = "localhost";
$user = "root";
$pass = "prakhya15";
$dbname="mydb";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$userid=$_POST["userid"];
$password=$_POST["password"];

//if($userid=="0" && $password="komire")
//{
//	unset($userid);
 //	header("location: admin.php");
	//exit;

//}
$sql="SELECT * FROM admin WHERE '$userid'=userid and '$password'=passwd";
$result= $conn->query($sql);
if($result->num_rows>0) 
{	
	$_SESSION['userid']=$userid;
	unset($userid);
 	header("location: admin.php");
	exit;
}


$sql="SELECT * FROM student WHERE '$userid'=userid and '$password'=passwd";
$result= $conn->query($sql);
if($result->num_rows>0) 
{	
	$_SESSION['userid']=$userid;
	unset($userid);
 	header("location: user.php");
	exit;
}



$sql1="SELECT * FROM faculty WHERE '$userid'=userid and '$password'=passwd";
$result1= $conn->query($sql1);
if($result1->num_rows>0) 
{	
	$_SESSION['userid']=$userid;
	unset($userid);
 	header("location: faculty.php");
	exit;
}
else 
	die("Connection failed: " . $conn->connect_error);


$conn->close();
?>

<html>
<head><title></title></head>
<body>
<a href="login.html">Deliver ordered items to the kitchen</a><br><br>

</body>
</html>


