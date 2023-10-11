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
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp; UMP Internship Management System (MyLI)</h1>
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
<h5 class = "subtitle">Student Information</h3>

<?php
$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());

$query = "SELECT * FROM studentinfo";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$stdID = $row["Stu_ID"];
		$stdName = $row["Stu_Name"];
		$phonenum = $row["Stu_NoTel"];
		$email = $row["Stu_Email"];
		$address = $row["Stu_Address"];
		$internshipCompany = $row["Comp_Name"];
		$noTelCompany = $row["Comp_NoTel"];
	?>
	
<div class="info">
<table>
<tr>
<th>Student ID:</th><td><?php echo $stdID; ?></td>
</tr>
<tr>
<th>Student Name:</th><td><?php echo $stdName; ?></td>
</tr>
<tr>
<th>Phone Number:</th><td><?php echo $phonenum; ?></td>
</tr>
<tr>
<th>Email:</th><td><?php echo $email; ?></td>
</tr>
<tr>
<th>Address:</th><td><?php echo $address; ?></td>
</tr>
<tr>
<th>Internship Company:</th><td><?php echo $internshipCompany; ?></td>
</tr>
<tr>
<th>No Tel Company:</th><td><?php echo $noTelCompany; ?></td>	
</tr>
</table>
</div>

<?php
    }
} else {
    echo "0 results";

}
?>

</body>
</html>