<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">

<div class="header">
    <img src="logo.png" width="150" height="75"; >
<h1>UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>
  
	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a class="active" href="new.html">News & Announcement</a></li>
<li><a  href="profile.php">Profile</a></li>
<li><a  href="#">Student-Coordinator Platform</a></li>
<li><a href="report.php">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px; background-color:#c6ecd9;">
<h2 class="solid">INSERTED DATA</h2>

<form action="new.php" method="post" >
<table style="width:50%"; align="center"> 

    <th colspan="2" class="a"><b class="a" >PROFILE</b></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><?php echo $_POST['name']; ?></td>
    </tr>
    <th><b>COMPANY ID:</b></th>
    <td ><?php echo $_POST['id']; ?></td>
    </tr>
    <tr>
      <th><b>ADDRESS</b></th>  
      <td><?php echo $_POST['address']; ?></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><?php echo $_POST['phone']; ?></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><?php echo $_POST['email']; ?></td>  
    <tr>
    <input type="submit" name="save" class="a" value="Update info">
	<input type="reset" name="save" class="a" value="Reset">
    </tr>
</table>
</form>
</body>
</html>

<?php

include("connect.php");

$name = $_POST['name'];
$id = $_POST['id'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$query = "INSERT INTO company (Comp_Name,Comp_ID,Comp_Address,Comp_NoTel,Comp_Email) VALUES('$name','$id','$address', '$phone','$email')";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='new.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>