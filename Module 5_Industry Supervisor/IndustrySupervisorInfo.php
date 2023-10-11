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
<h5 class = "subtitle">Industry Supervisor Information</h3>

<?php
$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());

$query = "SELECT * FROM industrysvinformation";
$result = mysqli_query($link, $query);
?>

<table>
<?php
while($row = mysqli_fetch_assoc($result)){
		$id = $row["InsSV_ID"];
		$name = $row["InsSV_Name"];
		$phonenum = $row["InsSV_NoTel"];
		$email = $row["InsSV_Email"];
		$compName = $row["Comp_Name"];
		$department = $row["InsSV_Department"];
		$compAdd = $row["Comp_Address"];
		$noTel = $row["Comp_NoTel"];
	
	echo "<tr><form action=update.php method=post>";
	echo "<th>ID</th>";
	echo "<td><input type = text name=id value = '". $id. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<td><input type = text name = name value = '". $name. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Phone Number</th>";
	echo "<td><input type = text name = phonenum value = '". $phonenum. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Email</th>";
	echo "<td><input type = email name = email value = '". $email. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Company Name</th>";
	echo "<td><input type = text name = compName value = '". $compName. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Department</th>";
	echo "<td><input type = text name = department value = '". $department. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Company Address</th>";
	echo "<td><input type = text name = compAdd value = '". $compAdd. "' required></textarea><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>No Tel of Company</th>";
	echo "<td><input type = text name = noTel value = '". $noTel. "' required><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td></td>";
	echo "<td style=text-align:right><button type=update>Update</button></td>";
	echo "</tr>";
	echo "</form>";
	}
	?>
</table>


</body>
</html>	
