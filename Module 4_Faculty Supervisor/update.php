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


<div style="margin-left:25%;padding:50px 50px;">
<h2 class="solid">Update Information</h2>
<div style="margin-left:-18%;padding:50px 50px;margin-top: -45px;">

	<form action="update.php" method="post">
	<table>
		<tr>
			<td class="b">ID </td>
			<td>
				<input type="text" name="id">
			</td>
		</tr>
		<tr>
			<td class="b">Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td class="b">Phone number</td>
			<td>
				<input type="text" name="pnumber">
			</td>
		</tr>
		<tr>
			<td class="b">Email</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td class="b">Faculty</td>
			<td>
				<input type="text" name="faculty">
			</td>
		</tr>
		<tr>
			<td class="b">Position</td>
			<td>
				<input type="text" name="position">
			</td>
		</tr>
	</table>
</div>
	<button class="a" name="save" style="margin-left:590px;" onclick="window.location.href='FSI.php';">Update</button>
</form>
</div>

<?php
        $dbname = 'myli';
	$username = 'root';
	$password = '';
	
		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if(isset($_POST['save']))
		{

		$id = $_POST['id']; 
		$name = $_POST['name']; 
		$pnumber = $_POST['pnumber']; 
		$email = $_POST['email'];
		$faculty = $_POST['faculty'];
		$position = $_POST['position'];

		$sql = "UPDATE facultysupervisor SET FacSV_Name='$name' ,FacSV_NoTel='$pnumber' ,FacSV_Email='$email' ,FacSV_Faculty='$faculty' ,FacSV_Position='$position' WHERE FacSV_ID='$id'";

                                                                                            
		if ($conn->query($sql) == TRUE) {
			echo "Updated";
			header("Location:FSI.php");
		} 
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
		$conn->close();    
		
		?>

</body>
</html>