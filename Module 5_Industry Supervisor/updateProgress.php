<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Internship Management System (MyLI)</title>
<link rel="stylesheet" href="./design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">

<div class="header">
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Internship Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br><br>
<a href="logout.php"><button type = "button">Logout</button></a>
</div>

<br><br><br><br><br><br><br><br><br><br><br>

<ul>
<li><a class="active" href="Homepage.php">Menu</a></li>
<li><a href="StudentList.php">Student List</a></li>
<li><a href="IndustrySupervisorInfo.php">Industry Supervisor Information</a></li>
<li><a href="StudentProgress.php">Student Progress</a></li>
<li><a href="StudentPerformance.php">Student Performance</a></li>
</ul>


<div class="subbody">
<h5 class = "subtitle">Student Progress</h3>
<form class="searching" action="" method="post">

<?php

$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());

if(isset($_POST["updateC"]))
{
	mysqli_query($link, "UPDATE logbook SET Comments = '$_POST[comment]' WHERE Stu_ID = '$_POST[stdID]' AND LogDate = '$_POST[date]'")  or die (mysqli_error($link));
	header("refresh:1; url=StudentProgress.php");
}

if(isset($_POST["updateM"]))
{
	mysqli_query($link, "UPDATE logbook SET Marks = '$_POST[marks]' WHERE Stu_ID = '$_POST[stdID]' AND LogDate = '$_POST[date]'")  or die (mysqli_error($link));
	header("refresh:1; url=StudentProgress.php");
}

?>

<form class="searching" action = "" method="POST">
<br><br>
Student ID:<input type="text" name="stdID"><br><br>
Date      :<input type="date" name="date"><br><br>
Comment   :<textarea rows="4" cols="50" name="comment"></textarea><br><br>
Marks     :<input type="number" name="marks"><br><br>
<button type="submit" name="updateC">Comment</button>
<button type="submit" name="updateM">Marks</button>
</form>

</body>
</html>
