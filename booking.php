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
$guesthousename=$_POST["guesthousename"];
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$persons=$_POST["persons"];
$rooms=$_POST["rooms"];
$mobile=$_POST["mobile"];
$student_userid=$_POST["student_userid"];
$faculty_userid=$_POST["faculty_userid"];


$sql="INSERT INTO booking VALUES('$guesthousename','$checkin','$checkout','$persons','waiting','$rooms','$mobile','$student_userid','$faculty_userid')";

if($conn->query($sql)==TRUE)

echo "HURRAY!!Wait for the response";
else

echo "nope .$sql";


$conn->close();
?>

