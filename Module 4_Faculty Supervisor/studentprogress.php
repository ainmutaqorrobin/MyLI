<!DOCTYPE html>
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
<h1>UMP Intership Management System (MyLI)</h1>
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

<form action="studentprogress.php" method="post">

<div style="margin-left:25%;padding:50px 50px;">
<h2 class="solid">Student Progress</h2>

<input type="text" name="name" placeholder="Search student ID"><br><br>
<button class="a" name="Search">Search</button>

<hr style="margin-left: -70px">
<div style="margin-left:-45%;padding:50px 50px;">

<table style="border: 1px solid black;width: 80%;margin-top: -40px;">
	<tr>
		<th>Student ID</th>
		<th>Day</th>
		<th>Date</th>
		<th>Activities</th>
		<th>Comment</th>
		<th>Marks</th>
	</tr>		
	<br>
	
	
<?php
        $dbname = 'myli';
		$username = 'root';
		$password = '';
		

		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}


		
		if(isset($_POST['Search']))
		{

		$name = $_POST['name'];
		$sql = "SELECT Stu_ID, LogDay, LogDate, LogActivity, Comments, Marks FROM logbook WHERE Stu_ID = '$name' ";
		$result = $conn->query($sql);

		if ($result == TRUE) {
			 while($row = mysqli_fetch_assoc($result)) {
			 ?>
			 
			 <tr>
			 	<td><?php echo $row['Stu_ID']; ?></td>
			 	<td><?php echo $row['LogDay']; ?></td>
			 	<td><?php echo $row['LogDate']; ?></td>
			 	<td><?php echo $row['LogActivity']; ?></td>
			 	<td><?php echo $row['Comments']; ?></td>
			 	<td><?php echo $row['Marks']; ?></td>
			 </tr>
			 <?php
		} 
}

		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}

		$conn->close();
		
?>

</table>

</div>
</div>
</form>


</body>
</html>

