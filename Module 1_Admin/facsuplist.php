<!DOCTYPE html>
<html lang="en">
<head>
<title>FACULTY SUPERVISOR LIST</title>
<link rel="stylesheet" href="admin.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">



<?php

include('connect.php');

$sql = "SELECT Stu_ID FROM facultysupervisor";
$result = $conn->query($sql);

?>





<div class="header">
<h1><img>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>

<!--home button and header2
<div style="color: black">
	<table border="1" style="height: 10px;"><tr style="height: 10px"><td style="width: 15%"><input style="size: 100%; height: 100%" type="button" name="home" value="Home"></td><td><h2>Online Logbook</h2></td></tr></table>
	</div>    if nak tambah ni tambah br kat bawah ni-->
	</div>
<br><br><br><br><br><br><br><br><br>
<div>
<div>	
<ul>
<li><a href="Homepage.html">Homepage</a></li>
<li><a href="studlist.php">Internship Student List</a></li>
<li><a class="active"href="facsuplist.php"">Faculty Supervisor List</a></li>
<li><a href="faccolist.php">Faculty Coordinator List</a></li>
<li><a href="indsuplist.php">Industry Supervisor List</a></li>
<li><a href="adminreport.php">Generate Report</a></li>
</ul>
</div>

<h2>FACULTY SUPERVISOR LIST</h2>
<div class="bgbox" style="margin-left:18%; margin-right: 0.5%;">
 <p>
     <br><br>
	<form style="margin: 5px">
	<table >

	<tr><button class="add"> <a href="addfacsup.php" style="text-decoration:none; color:white;">Create New Profile</a></button></tr>


<?php
//query from DB to display every faculty supervisor id
$row = $result->fetch_assoc();


$result = mysqli_query($conn,"SELECT FacSV_ID FROM facultysupervisor order by FacSV_ID ASC");

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['FacSV_ID'] . "</td>". "<td> <button><a style='text-decoration:none; color:black;' href='viewdetailfacsup.php?id=".$row['FacSV_ID']."'>View Detail</a></button></td>"."</td>". 
	"<td><button ><a style='text-decoration:none; color:black;' href='updatefacsup.php?id=".$row['FacSV_ID']."'>Update</a></button></td>".
	"<td><button ><a style='text-decoration:none; color:black;' href='deletefacsupsql.php?id=".$row['FacSV_ID']."'>Delete</a></button></td>";
	echo "</tr>";
}

?>



	</table>
	
</form>
 </p>
</div>
</div>
</body>
</html>

