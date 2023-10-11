<!DOCTYPE html>
<html lang="en">
<head>
<title>FACULTY COORDINATOR LIST</title>
<link rel="stylesheet" href="admin.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">



<?php

include('connect.php');

$sql = "SELECT Coordinator_ID FROM facultycoordinator";
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
<li><a href="facsuplist.php">Faculty Supervisor List</a></li>
<li><a class="active" href="faccolist.php">Faculty Coordinator List</a></li>
<li><a href="indsuplist.php">Industry Supervisor List</a></li>
<li><a href="adminreport.php">Generate Report</a></li>
</ul>
</div>

<h2>FACULTY COORDINATOR LIST</h2>
<div class="bgbox" style="margin-left:18%; margin-right: 0.5%;">
 <p>
     <br><br>
	<form style="margin: 5px">
	<table >

<tr><button class="add"> <a href="addfacco.php" style="text-decoration:none; color:white;">Create New Profile</a></button></tr>


<?php
//query from DB to display every intership student id
$row = $result->fetch_assoc();


$result = mysqli_query($conn,"SELECT Coordinator_ID FROM facultycoordinator");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Coordinator_ID'] . "</td>". "<td> <button><a style='text-decoration:none; color:black;' href='viewdetailfacco.php?id=".$row['Coordinator_ID']."'>View Detail</a></button></td>"."</td>". 
"<td><button ><a style='text-decoration:none; color:black;' href='updatefacco.php?id=".$row['Coordinator_ID']."'>Update</a></button></td>".
"<td><button ><a style='text-decoration:none; color:black;' href='deletefaccosql.php?id=".$row['Coordinator_ID']."'>Delete</a></button></td>";
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

