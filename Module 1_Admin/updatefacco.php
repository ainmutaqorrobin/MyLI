
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

<li><a class="active" href="#">Faculty Coordinator Update</a></li>
</ul>


<div style="margin-left:25%;padding:130px 50px;">
<h2 class="solid">INSERT DATA</h2>


<form action="updatefaccosql.php" method="POST" >
<table style="width:50%"; text-align="center">
<tr>
    <th colspan="2" class="a"><b class="a">UPDATE PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>COORDINATOR ID:</b></th>
    <td ><input readonly type="readonly" name="coid" value="<?php echo $_GET['id']; ?>"></td>
    </tr>
    <tr>
    <th><b>SUPERVISOR ID:</b></th>
    <td ><input  type="text" name="supid"></td>
    </tr>
    <tr>
    <th><b>ADDRESS:<b></th>
    <td><input  type="text" name="address"></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><input  type="text" name="phone"></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><input  type="text" name="email"></td>
    </tr>
    <tr>
    <th><b>AGE:<b></th>
    <td><input  type="text" name="age"></td>
    </tr>
    <tr>
    <th><b>IC NUMBER:<b></th>
    <td><input  type="text" name="ic"></td>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td><input  type="text" name="name"></td>
    </tr>
    <tr>
    <th><b>FACULTY:</b></th>
    <td><input  type="text" name="fak"></td>
    </tr>
    <tr>
    <th><b>PASSWORD:</b></th>
    <td><input  type="text" name="pass"></td>
    </tr>
  
</tr>
<tr>

	<th></th>
	<th><input type="submit" name="save" class="a" value="Enter"><input type="reset" name="save" class="a" value="Reset"></th>
    </tr>
</div>
</table>
</form>
<hr>


</body>
</html>


