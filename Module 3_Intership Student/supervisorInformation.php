<?php
	include("connection.php");
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  table, th, td{
  border: 3px solid #c6ecd9;
  border-collapse: collapse;
  padding:3px;
  background-color: #f2f2f2;
  text-align: left;
  background-color: #f2f2f2;
  margin-left: 5%;
}
/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

img{
  width: 12.4%;
  background-image: url("UMP.png");
  height: 80px;
  background-position: left;
  position: fixed;

}

/* Header/logo Title */
.header {
  padding :7px;
  text-align: center;
  background: #1abc9c;
  color: white;
  position: fixed;
  width: 100%;
  padding-bottom: 23px;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
  font-family: Stencil;
}

h2{
  text-align: center;
  font-family: Segoe UI Black;
}
.button {
  background-color: #508585;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 100px;
  height: 30px;
}


/* Navigation Bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 17%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  text-align:left;
  font-family:Myriad Pro Light;

}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #508585;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Border */
h2.solid{
  border-style:solid;
  text-align:center;
  
}

p.dashed{
  border-style:dashed;
  text-align:center;
  padding:50px;
}

/*content box*/
.bgbox{
  background-color: #c6ecd9;
}
table{
  width: 90%;
  text-align: left;
  background-color: #f2f2f2;
  border-color: #c6ecd9;
  border-width: 5px;
  margin-left: 5%;
}
input{
  width: 80%
}
textarea{
  width: 80%;
}

.buttonDelete{
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.buttonEdit{
  background-color: #52D017;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.smallcolumn{
  width: 90px;
}

.bigcolumn{
  width: 200px;
}
  </style>
</head>
<body onload="clock()">

<div class="header">
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br><br><a href="login.php"><button type = "button">Logout</button></a>
	</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div>
<div>	
<ul>
<li><a href="Homepage.php">Home</a></li>
<li><a href="onlineLogbook.php">Logbook</a></li>
<li><a class="active" href="supervisorInformation.php">Supervisor Information</a></li>
<li><a href="studentPerformance.php">Student Performance</a></li>
</ul>
</div>


<div class="bgbox" style="margin-left:18%; margin-right: 0.5%;">
	<br>
<h2>FACULTY SUPERVISOR</h2>
<p>
	<form>
		<i class="fa fa-user" style="font-size: 150px; padding-left: 44%;"></i>
		<table>
		

			<?php
	include("connection.php");
	error_reporting(0);

	$sql = "SELECT * FROM FacultySupervisor WHERE Stu_ID='CB19022'";
	    $sql_run = mysqli_query($link, $sql);
	    $total = mysqli_num_rows($sql_run);

	    if($total!=0)
	    { 
		while($row = mysqli_fetch_array($sql_run))
		    {
		    	 
		    ?>
			<tr><th class="bigcolumn">Name</th><td><?php echo $row['FacSV_Name']; ?></td></tr>
			<tr><th >ID</th><td><?php echo $row['FacSV_ID']; ?></td></tr>
			<tr><th >Phone Number</th><td><?php echo $row['FacSV_NoTel']; ?></td></tr>
			<tr><th >Email</th><td><?php echo $row['FacSV_Email']; ?></td></tr>
			<tr><th >Faculty</th><td><?php echo $row['FacSV_Faculty']; ?></td></tr>
			<tr><th >Position</th><td><?php echo $row['FacSV_Position']; ?></td></tr>
			<?php
			}
		}
		else
		{
			echo "No records found";
		}
	?>	
		</table>
	</form>
	<h2>INDUSTRY SUPERVISOR</h2>
	<form>
		<i class="fa fa-user" style="font-size: 150px; padding-left: 44%;"></i>
		<table>
	<?php
	include("connection.php");
	error_reporting(0);

	$sql = "SELECT Stu_ID,InsSV_Name,InsSV_ID,InsSV_NoTel,InsSV_Email,InsSV_Department FROM IndustrySupervisor WHERE Stu_ID='CB19022'";
	    $sql_run = mysqli_query($link, $sql);
	    $total = mysqli_num_rows($sql_run);

	    if($total!=0)
	    { 
		while($row = mysqli_fetch_array($sql_run))
		    {
		    	 
		    ?>
			<tr><th class="bigcolumn">Name</th><td><?php echo $row['InsSV_Name']; ?></td></tr>
			<tr><th class="bigcolumn">ID</th><td><?php echo $row['InsSV_ID']; ?></td></tr>
			<tr><th class="bigcolumn">Phone Number</th><td><?php echo $row['InsSV_NoTel']; ?></td></tr>
			<tr><th class="bigcolumn">Email</th><td><?php echo $row['InsSV_Email']; ?></td></tr>
			<tr><th class="bigcolumn">Department</th><td><?php echo $row['InsSV_Department']; ?></td></tr>
			<?php
			}
		}
		else
		{
			echo "No records found";
		}
	?>	
		</table>
		<div style="margin-left: 40%; margin-bottom: 20px;">
		<button style="width: 220px;" class="button" onclick="window.print()">Print Supervisor Information</button></div><br><br>
	
</form>
</p>
</div>
</div>

</body>
</html>

