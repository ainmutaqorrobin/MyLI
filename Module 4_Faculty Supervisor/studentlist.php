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
<h1 style="font-family: Stencil;">UMP Intership Management System (MyLI)</h1>
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


</body>
</html>

