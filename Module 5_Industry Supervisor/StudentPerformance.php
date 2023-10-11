<?php
$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());
?>

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
</nav>

<div class="subbody">
<h5 class = "subtitle">Student Performance</h3>

<?php


if(isset($_POST["insert"]))
{
	$Stu_ID   = $_POST['id'];
	$Stu_Name = $_POST['name'];
	$Mid_Mark = $_POST['midmarks'];
	$End_Mark = $_POST['endmarks'];
	
	$totalmarks = $Mid_Mark+$End_Mark;
	
	mysqli_query($link, "INSERT INTO studentperformance(Stu_ID,Stu_Name,Mid_Mark, End_Mark, totalmarks) VALUES ('$_POST[id]','$_POST[name]','$_POST[midmarks]','$_POST[endmarks]', '$totalmarks')");
	
}

	
?>

<form action= "" method="post">
<table>
<tr>
<th>Student ID</th>
<td><input type="text" name="id" required></td>
</tr>
<tr>
<th>Student Name</th>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<th>Mid Marks</th>
<td><input type="number" name="midmarks" required></td>
</tr>
<tr>
<th>End Marks</th>
<td><input type="number" name="endmarks" required></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="insert" value="Submit" />
<a href = "reportperformance.php"><input type ="button" value="Report" ></a>
</td>
</tr>
</table>
</form>

<?php
$query = "SELECT * FROM studentperformance";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_array($result)){
?>
<table>
<th>Student ID</th>
<td><?php echo $row['Stu_ID'];?></td>
</tr>
<tr>
<th>Student Name</th>
<td><?php echo $row['Stu_Name']; ?></td>
</tr>
<tr>
<th>Mid Marks</th>
<td><?php echo $row['Mid_Mark']; ?></td>
</tr>
<tr>
<th>End Marks</th>
<td><?php echo $row['End_Mark']; ?></td>
</tr>
<tr>
<th>Total Marks</th>
<td>
<?php echo $row['totalmarks']; ?></td>
</tr>
<tr>
<td colspan="2" ><a href="delete.php?name=<?php echo $row["Stu_Name"]; ?>"><button type="button">Delete</button></a></td>
</tr>
</table>

<?php		
	}
	?>



</body>
</html>