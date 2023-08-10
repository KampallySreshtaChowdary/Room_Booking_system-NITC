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

button{
	position:absolute;
	background: transparent;
	align: center;
	color: #490008;
	font-family: serif;
	font-size: 50px;
	font-weight: 1000;
	text-shadow:  3px 2px 2px #3a3334;
	
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
<li><a href="register.php">Register</a></li>

 <li style="float:right"><a class="active" href="faculty_update.html">Update</a></li>

  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>

<br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a style="float:centre" href="delete.php" ><button style="float:centre; position:relative">UPDATE DATABASE</button></a>





