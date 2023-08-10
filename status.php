<?php
$servername = "localhost";
$user = "root";
$pass = "prakhya15";
$dbname="mydb";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

session_start();
 
$student_userid = $_GET['id'];
$checkin=$_GET['id1'];
$checkout=$_GET['id2'];
$guesthousename=$_GET['id3'];
$status=$_GET['id4'];

if(strcmp($status,"accept")==0){
$sql1="UPDATE booking SET stat='accept' WHERE '$student_userid'=student_userid AND '$checkin'=checkin AND '$checkout'=checkout AND '$guesthousename'=guesthousename";
  
if($conn->query($sql1)==TRUE)
  { echo "updated successfully";}
else 
 {die ("connection failed .$sql1");}

}

else
{
$sql2="UPDATE booking SET stat='reject' WHERE '$student_userid'=student_userid AND '$checkin'=checkin AND '$checkout'=checkout AND '$guesthousename'=guesthousename";
  
if($conn->query($sql2)==TRUE)
  { echo "updated successfully";}
else 
 {die ("connection failed .$sql2");}
}
?>

