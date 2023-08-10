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

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
//session_start();
//$userid=$_SESSION['userid'];
$dat = date("Y-m-d");


$sql="SELECT * FROM booking"; //WHERE student_userid='$userid' //and checkout < '$dat' and stat='accept' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>GUESTHOUSENAME</th><th>Checkin</th><th>Checkout</th><th>noofpersons</th><th>status</th><th>NoofRooms</th><th> Mobile</th><th>Userid</th><th >Faculty</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["guesthousename"]. "</td><td>" . $row["checkin"]. "</td><td>" . $row["checkout"] . "</td><td>" .  $row["no_of_persons"] . "</td><td>" . $row["stat"] . "</td><td>" . $row["no_of_rooms"] . "</td><td>" . $row["mobile"] . "</td><td>" .  $row["student_userid"] . "</td><td>" . $row["faculty_userid"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

