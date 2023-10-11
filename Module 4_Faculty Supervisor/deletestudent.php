<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">

<div class="header">
<h1>UMP Intership Manadwadawdwgement System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<img src="logo.png">
<br><br>
<div><button onclick="window.location.href='login.php';">Log out</button></div>
</div>
	
<ul>
<li><a class="active" href="Homepage.html">Menu</a></li>
<li><a href="studentlist.php">Student List</a></li>
<li><a href="FSI.php">Faculty Supervisor Information</a></li>
<li><a href="StudentProgress.php">Student Progress</a></li>
<li><a href="StudentPerformance.php">Student Performance</a></li>
</ul>

<div style="margin-left:25%;padding:50px 50px;">
	<h2 class="solid">Student Lists</h2>
	<table>		
		<tr>
			<td colspan="2"><button class="d" onclick="window.location.href='viewstudent.php';" >View Student</button>
				<button class="a" onclick="window.location.href='addstudent.php';">Add student</button>
	        <button class="c" onclick="window.location.href='deletestudent.php';">Delete student</button></td>
		</tr>
	</table>
<hr>

<div style="margin-left:-18%;padding:50px 50px;">
	<form action="deletestudent.php" method="post">
	<table>
		<tr>
			<td><h4>Enter Student ID to delete :</h4></td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td colspan="2"><button class="a" style="margin-top: 50px;margin-left: 200px;" name="delete">Delete</button></td>
		</tr>
	</table>
</form>
</div>
</div>


<?php
    $dbname = 'myli';
    $username = 'root';
	  $password = '';
	  

	$conn = mysqli_connect("localhost", $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['delete'])){	

    $id = $_POST['id'];
    $sql = "DELETE FROM internshipstudent WHERE Stu_ID='" . $_POST['id'] . "'";

if ($conn->query($sql) == TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();

?>

</body>
</html>