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
	<h2 class="solid">New Student Information</h2>

	<form action="studentlist.php" method="post">
	<table style="border:1px solid black;margin-left: 300px;">
	<tr>
		<td class="b">Student ID</td>
		<td class="a"><?php echo $_POST['id']; ?></td>
	</tr>
	<tr>
		<td class="b">Name</td>
		<td class="a"><?php echo $_POST['name']; ?></td>
	</tr>
	<tr>
		<td class="b">Email</td>
		<td class="a"><?php echo $_POST['ic']; ?></td>
	</tr>
	<tr>
		<td class="b">Phone number</td>
		<td class="a"><?php echo $_POST['faculty']; ?></td>
	</tr>
	<tr>
		<td class="b">Faculty</td>
		<td class="a"><?php echo $_POST['program']; ?></td>
	</tr>
	<tr>
		<td class="b">Phone number</td>
		<td class="a"><?php echo $_POST['pnumber']; ?></td>
	</tr>
	<tr>
		<td class="b">Email</td>
		<td class="a"><?php echo $_POST['email']; ?></td>
	</tr>
	<tr>
		<td class="b">Address</td>
		<td class="a"><?php echo $_POST['address']; ?></td>
	</tr>
	<tr>
		<td colspan="2"><button onclick="window.location.href='studentlist.php';" class="c" style="margin-top: 20px;">Okay</button></td>
	</tr>
    

</table>
</form>
</div>
<hr>

<?php
                $dbname = 'myli';
		$username = 'root';
		$password = '';

		$name = $_POST['name'];
		$id = $_POST['id'];
		$ic = $_POST['ic'];
		$fac = $_POST['faculty'];
		$pro = $_POST['program'];
		$pnumber = $_POST['pnumber'];
		$email = $_POST['email'];
		$add = $_POST['address'];

		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO internshipstudent (Stu_Name, Stu_ID, Stu_IC, Stu_Faculty, Stu_Programme, Stu_NoTel, Stu_Email, Stu_Address) VALUES ('$name', '$id', '$ic', '$fac', '$pro', '$pnumber', '$email', '$add')";
                                                                                    
        
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
		
		?>
</body>
</html>