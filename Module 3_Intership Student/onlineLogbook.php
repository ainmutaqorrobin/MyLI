
<!DOCTYPE html>
<html lang="en">
<head>

<title>UMP Intership Management System (MyLI)</title>

<link rel="stylesheet" type="text/css" href="style.css">

<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  table, th, td{
  border: 3px solid #c6ecd9;  
  border-collapse: collapse;
  padding:3px;
  background-color: #f2f2f2;
  text-align: center;
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
  text-align: center;
  background-color: #f2f2f2;
  border-color: #c6ecd9;
  border-width: 5px;
  width: 90%;
}
input{
  width: 99%;
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
<li><a class="active" href="onlineLogbook.php">Logbook</a></li>
<li><a href="supervisorInformation.php">Supervisor Information</a></li>
<li><a href="studentPerformance.php">Student Performance</a></li>
</ul>
</div>


<div class="bgbox" style="margin-left:18%; margin-right: 0.5%;">
	<br>
<h2>ONLINE LOGBOOK</h2>
<p>
	<form action="addLogbook.php" method="post">
		<table>
			<tr><td><div>
				<table>

			<tr><th>Date</th><td><input type="date" name="LogDate" placeholder="Enter date" required></td></tr>

			<tr><th class="smallcolumn">Day</th>
				<td><input type="text" name="LogDay" placeholder="Enter day" required></td> </tr>

			<tr><th>Activity</th><td><input type="text" name="LogActivity" placeholder="Enter activity" required ></td></tr> 
			</div></table></td>
			<td style="text-align: center; padding-top: 60px"><input class="button" type="submit" name="add" value="Add" onclick="document.location:'onlineLogbook.php'"></td></tr>
		</table>

	</form>
	<h2>YOUR LOGBOOK</h2>
	<form>
		
	<table>
		<tr style="text-align: center;">
			<th>No</th>
			<th class="smallcolumn">Date</th>
			<th class="smallcolumn">Day</th>
			<th class="bigcolumn">Activities</th>
			<th class="bigcolumn">Comments</th>
			<th class="bigcolumn">Mark</th>
		</tr>

		<?php
		$link = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($link, "myLi");

		$sql = "SELECT LogDate,LogDay,LogActivity,Comments,Marks FROM Logbook";
	    $sql_run = mysqli_query($link, $sql);
	    $total = mysqli_num_rows($sql_run);
      $number = 1;

	    if($total!=0)
	    { 
		    while($row = mysqli_fetch_array($sql_run))
		    {
		    	 
		    echo "
			<tr>
				<td>".$number."</td> 
				<td>".$row['LogDate']."</td>
				<td>".$row['LogDay']."</td>
				<td>".$row['LogActivity']."</td>
				<td>".$row['Comments']."</td>
				<td>".$row['Marks']."</td>
        
				
				<td><a href= 'editLogbook.php?no=$number&LogDate=$row[LogDate]&LogDay=$row[LogDay]&LogActivity=$row[LogActivity]'>EDIT</td>
				<td><a href = 'deleteLogbook.php?NO=$row[LogDate]' onclick='return checkdelete()'>DELETE</td>
			</tr>
			";
      $number++; 
			}
		}
		else
		{
			echo "No records found";
		}
	?>	
		</table>
		<script type="text/javascript">
			function checkdelete()
			{
				return confirm('Are you sure want to delete this record?');
			}
		</script>	
	
</form>
</p>
</div>
</div>

</body>
</html>

