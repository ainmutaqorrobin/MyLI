
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
    <img src="UMP.png" width="150" height="75"; >
<h1>UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
</div>
  
	
<ul>

<li><a class="active" href="#">Industry Supervisor Detail</a></li>
</ul>


<div style="margin-left:25%;padding:130px 50px;">
<h2 class="solid">INSERT DATA</h2>


<form action="indsuplist.php" method="POST" >
<?php
include('connect.php');

$result = mysqli_query($conn,"SELECT * from industrysupervisor WHERE InsSV_ID='{$_GET['id']}'");
$row = $result->fetch_assoc();

?>
<table style="width:50%"; text-align="center">
<tr>
    <th colspan="2" class="a"><b class="a">DETAIL PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>STUDENT ID:</b></th>
    <td ><input readonly type="readonly" name="studid" value="<?php echo $row['Stu_ID']; ?>"></td>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><input readonly type="readonly" name="name" value="<?php echo $row['InsSV_Name']; ?>"></td>
    </tr>
    <tr>
    <th><b>MATRIC ID:<b></th>
    <td><input readonly type="readonly" name="id" value="<?php echo $row['InsSV_ID']; ?>"></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><input readonly type="readonly" name="phone" value="<?php echo $row['InsSV_NoTel']; ?>"></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><input readonly type="readonly" name="email" value="<?php echo $row['InsSV_Email']; ?>"></td>
    </tr>
    <tr>
    <th><b>DEPARTMENT:</b></th>
    <td><input readonly type="readonly" name="department" value="<?php echo $row['InsSV_Department']; ?>"></td>
    </tr>
    <tr>
    <th><b>COMPANY ID:</b></th>
    <td><input readonly type="readonly" name="compid" value="<?php echo $row['Comp_ID']; ?>"></td>
    </tr>
  
</tr>
<tr>

	<th></th>
	<th><input type="submit" name="save" class="a" value="Back"></th>
    </tr>
</div>
</table>
</form>
<hr>


</body>
</html>


