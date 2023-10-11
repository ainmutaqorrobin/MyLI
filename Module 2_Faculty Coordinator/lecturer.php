
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
    <img src="logo.png" width="150" height="75"; >
<h1>UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>
  
	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a href="new.php">News & Announcement</a></li>
<li><a  href="profile.php">Profile</a></li>
<li><a class="active" href="stdcoorlist.php">Student-Coordinator Platform</a></li>
<li><a href="report.php">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px;background-color:#c6ecd9;">
<h2 class="solid">INSERT DATA</h2>


<form action="newdata.php" method="post" >
<table style="width:50%"; align="center">
<tr>
    <th colspan="2" class="a"><b class="a">PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><input type="text" name="name"></td>
    </tr>
    <tr>
    <th><b>ID:</b></th>
    <td ><input type="text" name="id"></td>
    </tr>  
    <tr>
    <th><b>POSITION:</b></th>
    <td><input type="text" name="position"></td>
    </tr>
    <tr>
    <th><b>FACULTY:</b></th>
    <td><input type="text" name="faculty"></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><input type="text" name="phone"></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><input type="email" name="email"></td>
    </tr>
  
</tr>
<tr>
    <th colspan="3" style="text-align: center;" class="a"><b class="b">STUDENT</b></th>
    
</tr>
<tr>
<th><b>MATRIK ID</b></th>
<td><input type="text" name="matrik"></td>
</tr>
<tr>
	<th></th>
	<th><input type="submit" name="save" class="a" value="Update info"><input type="reset" name="save" class="a" value="Reset"></th>
    </tr>
</div>
</table>
</form>
<hr>


</body>
</html>


