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
?>
<?php
session_start();
$userid=$_SESSION['userid'];
$phoneno=$_POST["phoneno"];
$passwd =$_POST["passwd"];

$sql1="SELECT  * from student WHERE '$userid'=userid"; 
$result= $conn->query($sql1);
if($result->num_rows>0) 
{	
$email=$_POST["email"];

$sql = "UPDATE student SET nam ='$phoneno',passwd ='$passwd', email ='$email' WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) 
{
echo "<script>alert('Updated')</script>";
echo "<script>window.open('user.php','_self')</script>";
exit;
}
else 
{
    echo "Error updating record: " . $conn->error;
}
}

$sql1="SELECT  * from admin WHERE '$userid'=userid"; 
$result= $conn->query($sql1);


if($result->num_rows>0) 
{

$sql = "UPDATE admin SET passwd ='$passwd',nam='$phoneno' WHERE userid='$userid'";


if ($conn->query($sql) === TRUE) 
{
echo "<script>alert('Updated')</script>";
echo "<script>window.open('admin.php','_self')</script>";
exit;
}
else 
{
    echo "Error updating record: " . $conn->error;
}

}

else
{

$sql = "UPDATE faculty SET phoneno ='$phoneno',passwd ='$passwd' WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) 
{
echo "<script>alert('Updated')</script>";
echo "<script>window.open('faculty.php','_self')</script>";
exit;
}
else 
{
    echo "Error updating record: " . $conn->error;
}

}
unset($phoneno);
unset($passwd);
unset($email);
?>
