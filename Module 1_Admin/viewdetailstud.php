
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

<li><a class="active" href="#">Internship Student Detail</a></li>
</ul>


<div style="margin-left:25%;padding:130px 50px;">
<h2 class="solid">DETAIL PROFILE</h2>


<form action="studlist.php" method="POST" >
<?php
include('connect.php');

$result = mysqli_query($conn,"SELECT * from internshipstudent WHERE Stu_ID='{$_GET['id']}'");
$row = $result->fetch_assoc();

?>
<table style="width:50%"; text-align="center">
<tr>
    <th colspan="2" class="a"><b class="a">DETAIL PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>MATRIC_ID:</b></th>
    <td ><input readonly type="readonly" name="matric" value="<?php echo $row['Stu_ID']; ?>"></td>
    </tr>
    <tr>
    <th><b>PASSWORD:</b></th>
    <td ><input readonly type="readonly" name="studpass" value="<?php echo $row['Stu_Password']; ?>"></td>
    </tr>
    <tr>
    <th><b>COORDINATOR ID:<b></th>
    <td><input readonly type="readonly" name="coid" value="<?php echo $row['Coordinator_ID']; ?>"></td>
    </tr>
    <tr>
    <th><b>NAME::</b></th>
    <td><input readonly type="readonly" name="name" value="<?php echo $row['Stu_Name']; ?>"></td>
    </tr>
    <tr>
    <th><b>IC:</b></th>
    <td><input readonly type="readonly" name="ic" value="<?php echo $row['Stu_IC']; ?>"></td>
    </tr>
    <tr>
    <th><b>FACULTY:<b></th>
    <td><input readonly type="readonly" name="fak" value="<?php echo $row['Stu_Faculty']; ?>"></td>
    </tr>
    <tr>
    <th><b>PROGRAMME:<b></th>
    <td><input readonly type="readonly" name="programme" value="<?php echo $row['Stu_Programme']; ?>"></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><input readonly type="readonly" name="phonenum" value="<?php echo $row['Stu_NoTel']; ?>"></td>
    </tr>
    <tr>
    <th><b>Email:<b></th>
    <td><input readonly type="readonly" name="email" value="<?php echo $row['Stu_Email']; ?>"></td>
    </tr>
    <tr>
    <th><b>ADDRESS:<b></th>
    <td ><input readonly type="readonly" name="address" value="<?php echo $row['Stu_Address']; ?>"></td>
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


