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

<div style="margin-left:-45%;padding:50px 50px;">
<table style="border: 1px solid black;width: 80%;">
	<tr>
		<th>Student ID</th>
		<th>Name</th>
		<th>IC</th>
		<th>Phone number</th>
		<th>Email</th>
		<th>Faculty</th>
		<th>Programme</th>
		<th>Address</th>
	</tr><br>
<?php
                $dbname = 'myli';
		$username = 'root';
		$password = '';

		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT Stu_ID, Stu_Name, Stu_IC, Stu_NoTel, Stu_Email, Stu_Faculty, Stu_Programme, Stu_Address FROM internshipstudent";
		$result = $conn->query($sql);
                                                                                          
		if ($result == TRUE) {
			 while($row = mysqli_fetch_assoc($result)) {
			 ?>
			 <tr>
			 	<td><?php echo $row['Stu_ID']; ?></td>
			 	<td><?php echo $row['Stu_Name']; ?></td>
			 	<td><?php echo $row['Stu_IC']; ?></td>
			 	<td><?php echo $row['Stu_NoTel']; ?></td>
			 	<td><?php echo $row['Stu_Email']; ?></td>
			 	<td><?php echo $row['Stu_Faculty']; ?></td>
			 	<td><?php echo $row['Stu_Programme']; ?></td>
			 	<td><?php echo $row['Stu_Address']; ?></td>
			 </tr>

			 <?php

		} 
}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
		
?>	

</table>
</div>
</div>

</body>
</html>

