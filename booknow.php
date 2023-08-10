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
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];

$month1=substr($checkin,0,2);
$day1=substr($checkin,3,2);
$year1=substr($checkin,6,4);
$month2=substr($checkout,0,2);
$day2=substr($checkout,3,2);
$year2=substr($checkout,6,4);

$in="$year1-$month1-$day1 ";

$out="$year2-$month2-$day2 ";

if($in>$out)
{

echo "<script>alert('invalid checkout')</script>";
echo "<script>window.open('checkavailability.php','_self')</script>";


exit;
}
?>

<html>
<head>
<style>
body{
	margin-left:600px;
	margin-top:50px;
	background-image: url(http://www.nitc.ac.in/app/webroot/img/upload/266896746.jpg);
	background-repeat: no-repeat;
	background-size: cover;



	
}
</style>
<?php
$sql="SELECT sum(no_of_rooms) AS var FROM booking ";
$result=$conn->query($sql);
{
    $sql1=$result->fetch_assoc();
 echo "AVAILABLE_ROOMS:";
  echo  (40-$sql1["var"]);
}
?>


<title>BOOK NOW</title>
</head>
<body>
<div class="centre">
<button type="button" onclick="document.getElementById('startbooking').style.display='block'">START BOOKING</button>
</div>
<div id="startbooking" style="display:none">

<form action="booking.php" method="post">


Guest House:<br>
	<select name="guesthousename" placeholder="select your required guest house" required>
	<option value="mba">mba</option>
	<option value="ih">ih</option></select><br><br>
	
Checkin date :<br>
  <input type="date" id="datepicker" value="<?php echo $in;?>" name="checkin" size="25" required><br>

Checkout date :<br>
  <input type="date" id="datepicker1" value="<?php echo $out;?>" name="checkout" size="25" required><br>


No.of persons:<br>
  <input type="number" name="persons" placeholder="enter the no of persons" size="25" min="1" max="9"required><br>
	

No.of rooms:<br>
  <input type="number" name="rooms" placeholder="enter no of rooms required" size="25" min="1" max="<?php echo (40-$sql1["var"]);?>" required><br>

resident phone_no:<br>
  <input type="number" name="mobile" placeholder="enter resident mobile" size="25" required><br>

student_userid:<br>
  <input type="text" name="student_userid" value="<?php echo $userid; ?>" size="25"required ><br>

select faculty_userid:<br>
	<select name="faculty_userid" placeholder="select your FA" required>
	<option value="select">o</option>

	<option value="jayaraj">jayaraj</option>
<option value="abdul nazeer">abdul nazeer</option>

	<option value="subhashree">subhashree</option>
	<option value="xyz">xyz</option></select><br><br>


<input type="submit" value="Get Booked" size="15">
</div>
<?php

unset($d);
unset($d1);
unset($checkin);
unset($checkout);
unset($month1);
unset($month2);
unset($day1);
unset($day2);
unset($year1);
unset($year2);

?>
</body>
</html>
