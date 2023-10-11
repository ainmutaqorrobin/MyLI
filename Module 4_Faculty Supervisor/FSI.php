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
<h2 class="solid">Faculty Supervisor Information</h2>
<div style="margin-left:-45%;padding:50px 50px;">
<table style="border: 1px solid black;width: 80%;margin-top: -40px;">
	<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Phone number</th>
		<th>Email</th>
		<th>Faculty</th>
		<th>Position</th>
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

		$sql = "SELECT FacSV_Name, FacSV_ID, FacSV_NoTel, FacSV_Email, FacSV_Faculty, FacSV_Position FROM facultysupervisor";
		$result = $conn->query($sql);
                                                                                          
		if ($result == TRUE) {
			 while($row = mysqli_fetch_assoc($result)) {
			 ?>
			 <tr>
			 	<td><?php echo $row['FacSV_Name']; ?></td>
			 	<td><?php echo $row['FacSV_ID']; ?></td>
			 	<td><?php echo $row['FacSV_NoTel']; ?></td>
			 	<td><?php echo $row['FacSV_Email']; ?></td>
			 	<td><?php echo $row['FacSV_Faculty']; ?></td>
			 	<td><?php echo $row['FacSV_Position']; ?></td>
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

<button class="c" style="margin-left: 1110px;margin-top: 40px;" onclick="window.location.href='update.php';">Update info</button>
</div>
</div>

</body>
</html>