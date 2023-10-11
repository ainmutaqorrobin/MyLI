
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
<br>    
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>
  
	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a href="new.html">News & Announcement</a></li>
<li><a  href="profile.php">Profile</a></li>
<li><a class="active" href="#">Student-Coordinator Platform</a></li>
<li><a href="report.html">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px;background-color:#c6ecd9;">
<h2 class="solid">INSERTED DATA</h2>


<form action="stdcoorlist.php" method="post" >
<table style="width:50%"; align="center">
<tr>
    <th colspan="2" class="a"><b class="a">PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><?php echo $_POST['name']; ?></td>
    </tr>
    <tr>
    <th><b>AGE:<b></th>
    <td><?php echo $_POST['id']; ?></td>
    </tr>
    <tr>
    <th><b>POSITION:</b></th>
    <td><?php echo $_POST['position']; ?></td>
    </tr>
    <tr>
    <th><b>FACULTY:</b></th>
    <td><?php echo $_POST['faculty']; ?></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><?php echo $_POST['phone']; ?></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><?php echo $_POST['email']; ?></td>
    </tr>
  
</tr>
<tr>
    <th colspan="3" style="text-align: center;" class="a"><b class="b">STUDENT</b></th>
</tr>
<tr>

	<input type="submit" name="save" class="a" value="Update info">
	<input type="reset" name="save" class="a" value="Reset">
    </tr>
</div>
</table>
</form>
<hr>


</body>
</html>

<?php

include("connect.php");

$name = $_POST['name'];
$id = $_POST['id'];
$position = $_POST['position'];
$faculty = $_POST['faculty'];
$phone = $_POST['phone'];
$email = $_POST['email'];   
$matrik= $_POST['matrik'];




$query = "INSERT INTO facultysupervisor (FacSV_name,FacSV_ID,FacSV_Position,FacSV_Faculty,FacSV_Notel,FacSV_Email,Stu_ID) VALUES('$name','$id','$position','$faculty','$phone','$email','$matrik')";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='stdcoorlist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $query2)) {
      
    echo "<script type='text/javascript'> window.location='stdcoorlist.php' </script>";
     
 } else {
     echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
 }
?>