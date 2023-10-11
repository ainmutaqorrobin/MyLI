<?php
$link = mysqli_connect("localhost","root","","MyLI");

$query = "SELECT * FROM studentperformance";
$result = mysqli_query($link, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
	$chart_data .="{ name:'".$row["Stu_Name"]."', midmarks:".$row["Mid_Mark"].", endmarks:".$row["End_Mark"].", totalmarks:".$row["totalmarks"]."}, ";
}
$chart_data = substr ($chart_data, 0,-2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Internship Management System (MyLI)</title>
<link rel="stylesheet" href="./design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="clock()">

<div class="header">
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Internship Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br><br>
<a href="logout.php"><button type = "button">Logout</button></a>
</div>

<br><br><br><br><br><br><br><br><br><br><br>

<ul>
<li><a class="active" href="Homepage.php">Menu</a></li>
<li><a href="StudentList.php">Student List</a></li>
<li><a href="IndustrySupervisorInfo.php">Industry Supervisor Information</a></li>
<li><a href="StudentProgress.php">Student Progress</a></li>
<li><a href="StudentPerformance.php">Student Performance</a></li>
</ul>
</nav>

<div class="subbody">
<h5 class = "subtitle">Report</h3>


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<div id="chart"></div>

<br>&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="window.print();">Print Report</button>

<script>
//Chart
Morris.Bar(
{
	element: 'chart',
	data: [<?php echo $chart_data; ?>],
	xkey: 'name',
	ykeys: ['midmarks','endmarks','totalmarks'],
	labels: ['midmarks','endmarks','totalmarks'],
	hideHover: 'auto',
}
);
</script>

</body>
</html>