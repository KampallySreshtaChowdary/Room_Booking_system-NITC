

<html>
<style>


body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(blur.jpg);
	background-size: cover;
	z-index: 0;
}




 h2{


	text-align: center;
	color: #490008;
	font-family: serif;
	font-size: 30px;
	font-weight: 1000;
	text-shadow:  2px 1px 1px #3a3334;
	
	opacity: 0.9;
}


 a button{
	width: 260px;
	height: 45px;
	background: black;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
</style>

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


$student_userid = $_GET['id'];
$checkin=$_GET['id1'];
$checkout=$_GET['id2'];
$guesthousename=$_GET['id3'];

$sql="SELECT * FROM (booking JOIN student ON userid=student_userid) WHERE '$student_userid'=student_userid AND '$checkin'=checkin AND '$checkout'=checkout AND '$guesthousename'=guesthousename";
?>

<body>

<?php
$result = $conn->query($sql);
if ($result->num_rows==1){
    $row=$result->fetch_assoc();
?>

<br>


<h2><?php echo "Name: $row[nam] <br>"; ?></h2>


<h2><?php echo "student_userid: $row[student_userid] <br>";?>

<h2><?php echo "mobile number: $row[mobile] <br>";?>

<h2><?php echo "Guest House name: $row[guesthousename] <br>";?>
 	
<h2><?php echo "Checkin date : $row[checkin] <br>";?>
  
<h2><?php echo "Checkout date: $row[checkout] <br>";?>


<h2><?php echo "No.of persons: $row[no_of_persons] <br>";?>


<h2><?php echo "No.of rooms: $row[no_of_rooms] <br>";?>


<h2><?php echo "resident phone_no: $row[mobile] <br>";?>


</body>
</html>
<?php 
$accept="accept";
$reject="reject";

 echo  "<a href='status.php?id=".$row['student_userid']."&id1=".$row['checkin']."&id2=".$row['checkout']."&id3=".$row['guesthousename']."&id4=".$accept."'>"."<button>accept</button>"."</a>" ;

echo "                                            " ;
echo  "<a href='status.php?id=".$row['student_userid']."&id1=".$row['checkin']."&id2=".$row['checkout']."&id3=".$row['guesthousename']."&id4=".$reject."'>"."<button>reject</button>"."</a>" ;


}
?>




