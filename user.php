


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

li a {
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

.articles h3{
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
  <li><a href="checkavailability.html">Check Availability</a></li>
   <li><a href="bookeddetails.php">View Bookings</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="student_update.html">Update</a></li>
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

?>

<?php
session_start();
echo "<div class='articles'>";
$userid=$_SESSION['userid'];
echo $userid ."<br>";
$sql="SELECT nam, rollno, phoneno, email FROM student WHERE userid='$userid'";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo  "<h2>" ."Hi " . $row["nam"] ."!"."<br>"."</h2>"."<h3>" . "Roll-No: " .$row["rollno"]."<br>"."<br>"."Phone-No: " .$row["phoneno"]."<br>"."<br>"."Email-ID: " .$row["email"]."<br>". "</h3>" ; 
    }
} else {
    echo "0 results";
}
echo "</div>";
?>



</body>
</html>





