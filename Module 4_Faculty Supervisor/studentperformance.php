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

<?php
session_start();

if(isset($_POST['calculate']))
{
	$id = $_POST['id'];
	$p = $_POST['Presentation'];
	$m = $_POST['midterm'];
	$f = $_POST['final'];
	
	$_SESSION['id'] = $id;
	$_SESSION['Presentation'] = $p;
	$_SESSION['midterm'] = $m;
	$_SESSION['final'] = $f;
	

	header("Location:updatestudent.php");

}
?>

<form action="studentperformance.php" method="post">

<div style="margin-left:25%;padding:50px 50px;">
<h2 class="solid">Student Performance</h2>

<input type="text" name="id" placeholder="Search student ID"><br><br>
<button class="a" name="Search">Search</button>

<hr style="margin-left: -70px">
<div style="margin-left:-45%;padding:50px 50px;">

<table style="border: 1px solid black;width: 80%;margin-top: -40px;">
	<tr>
		<th>Student ID</th>
		<th>Presentation mark</th>
		<th>Midterm mark</th>
		<th>Final semester mark</th>
	</tr>		
	<br>
	
	
<?php
        $dbname = 'myli';
	$username = 'root';
	$password = '';
		

		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
		if(isset($_POST['Search']))
		{

		$id = $_POST['id'];
		$sql = "SELECT Stu_ID  FROM report WHERE Stu_ID = '$id'";
		$result = $conn->query($sql);

		if ($result == TRUE) 
		{
			 while($row = mysqli_fetch_assoc($result)) 
			 {
?>
			 
			 <tr>
			 	<td><input type="text" name="id" value="<?php echo $_POST['id'];?>" style="width: 70px;" readonly></td>
			 	<td><input type="number" name="Presentation" id="Presentation" placeholder="Enter mark"></td>
			 	<td><input type="number" name="midterm" id="Midterm" placeholder="Enter mark"></td>
			 	<td><input type="number" name="final" id="Final" placeholder="Enter mark"></td>
			</tr>
			<tr>
			 	<td colspan="5"><button class="c" name="calculate">Calculate</button></td>
			 </tr>
			 
			 <?php
		        } 
                }  

		else 
		{
		echo "Error: " . $sql . "<br>" . $conn->error;
		}

            
		$conn->close();
}


?>

        <tr>
        <td colspan="5">

	<?php 

		 if(isset($_GET['totalmark']))
		 {
	 	     $totalmark = $_GET['totalmark'];
	 	     echo "Total mark for current student" . " " . "is" . " " . $totalmark . "%";
		}

	 ?>

	</td>		 	
	</tr>

</table>

</div>
</div>

</form>
<button class="f" onclick="window.location.href='report.php';">Print report</button>
<button class="e" onclick="window.location.href='graph.php';">View Student performance graph</button>


</body>
</html>
