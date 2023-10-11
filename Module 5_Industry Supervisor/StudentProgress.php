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

<input type="text" name="stdID" placeholder="Search Student ID"><br><br>
<input type="submit" name="search" value="Search Data"><br><br>

</form>

<?php

$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());

if(isset($_POST['search']))
{
	$Stu_ID = $_POST['stdID'];
	$query = "SELECT * FROM logbook WHERE Stu_ID= '$Stu_ID'";
	$result = mysqli_query($link, $query);


	while($row = mysqli_fetch_array($result)){

?>	
<table>
<tr>
	<th>Student ID</th>
	<th>Day</th>
	<th>Date</th>
	<th>Activities</th>
	<th>Comment/Feedback</th>
	<th>Marks</th>
	<th>Action</th>
	</tr>
<?php
		echo "<tr>";
		echo "<td>"; echo $row['Stu_ID']; echo"</td>";
		echo "<td>"; echo $row['LogDay']; echo"</td>";
		echo "<td>"; echo $row['LogDate']; echo "</td>";
		echo "<td>"; echo $row['LogActivity']; echo"</td>";
		echo "<td>"; echo $row['Comments']; echo "</td>";
		echo "<td>"; echo $row['Marks']; echo "</td>";
		echo "<td>"; ?><a href="updateprogress.php?stdID=<?php echo $row["Stu_ID"]; ?>"><button type="button">Comment/<br>Marks</button></a> <?php echo "</td>";
		echo "</tr>";
?>		
</table>


<?php		
	}
}
?>

</body>
</html>

