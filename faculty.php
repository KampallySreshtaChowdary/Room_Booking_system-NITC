<!DOCTYPE html>
<html>
<head>
<style>


body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;

}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(nitcrajpath2.jpg);
	background-size: cover;
	-webkit-filter: blur(4px);
	z-index: 0;
}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: 0.7;
    height: 80px;
}

li {
    float: left;
}

li a,button {
    display: block;
    color: white;
    font-family: serif;
    font-weight: 700;
    text-align: center;
    padding: 27px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    height: 80px;
    background-color: #111;
}

li button:hover:not(.active) {
    height: 80px;
    background-color: #111;
}

.active {
    height: 80px;
    background-color: #4CAF50;
}

.articles h2{

	background: transparent;
	text-align: center;
	color: #490008;
	font-family: serif;
	font-size: 30px;
	font-weight: 1000;
	text-shadow:  5px 2px 2px #3a3334;
	
	opacity: 0.9;
}

.articles a{
        position: relative;
        float:left;
        width: 300px;
        top: calc(50% - 10px);
	left: calc(50% - 65px);
	background: transparent;
	background-color: black;
	color: white;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 1000;
	text-shadow:  5px 2px 2px gray;
	border-radius: 5px;
	opacity: 0.7;
}

</style>
</head>
<body>

<div class="body"></div>
<ul>
  <li><a href="#home">Home</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="faculty_update.html">Update</a></li>
 <li> <button  style="background-color: black ;opacity: 0.6; " onclick="document.getElementById('pending').style.display='block'">PENDING APPLICATIONS</button></li>
  <li><button  style="background-color: black ;opacity: 0.6; " onclick="document.getElementById('rejected').style.display='block'">CLICK HERE TO SEE REJECTED APPLICATIONS</button></li>

</ul>

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

$userid=$_SESSION['userid'];

echo "HELLOO   $userid";
?>
<br>



<div id="pending" style="display:none; position:absolute">

<?php
$application;
echo "<div class='articles'>";
$sql="SELECT * FROM booking WHERE '$userid'=faculty_userid AND stat='waiting'"; 
$result=$conn->query($sql);


echo "<h2><u>PENDING APPLICATIONS</u></h2>";

$i=1;

while($row = ($result->fetch_assoc())) { 
  echo  "<a href='ac.php?id=".$row['student_userid']."&id1=".$row['checkin']."&id2=".$row['checkout']."&id3=".$row['guesthousename']."'>".'application'.$i."</a>" ;
echo "<br>.<br>.<br>";

$i++;
}
 echo "</div>" ;
?>

<br><br>


<div id="rejected" style="display:none ;position:absolute">

<?php
echo "<div class='articles'>";
$sql1="SELECT * FROM booking WHERE '$userid'=faculty_userid AND stat='reject'"; 
$result1=$conn->query($sql1);

echo "<h2><u>REJECTEDAPPLICATIONS</u></h2>";

$i=1;

while($row = ($result1->fetch_assoc())) { 
  echo  "<a href='ac.php?id=".$row['student_userid']."&id1=".$row['checkin']."&id2=".$row['checkout']."&id3=".$row['guesthousename']."'>".'application'.$i."</a>" ;
echo '<br>.<br>.<br>';

$i++;
}
echo "</div>";
?>


</div>

</body>
</html>



