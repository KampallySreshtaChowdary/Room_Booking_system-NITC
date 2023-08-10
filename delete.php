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


$date=date("Y-m-d");

$sql="DELETE FROM booking where checkout<'$date'";
$result=$conn->query($sql);

if($conn->query($sql)==TRUE)
  { echo "updated successfully";}
else 
 {die ("connection failed .$sql");}




?>
