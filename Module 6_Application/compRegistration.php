<?php
    include("connection.php");
    error_reporting(0);
    ?>


<!DOCTYPE html>
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
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<b class="italic"><span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span></b>
<br><br>
&nbsp;<a href="Login.php"><button type = "button">Logout</button></a>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
		
<ul>
<li><a href="Homepage.php">Home</a></li>
<li><a href="compInformation.php">Company Information List</a></li>
<li><a class="active" href="compRegistration.php">Company Registration</a></li>
<li><a href="studentApplication.php">Student Application</a></li>
<li><a href="viewReport.php">View Report</a></li>
</ul>
</div>

<div class="bgbox" style="margin-left:18%; margin-right: 0.5%; padding-bottom: 8%">
	
       <br> 

<caption><h2 class="solid"> Application Page </h2><caption>

<caption><h2> Company Registration </h2><caption>

<form action="addCompany.php" method="post" align="center">
<fieldset style="border-color:green">
    <table align="center">
    <tr>
      <td><label for="txtName">Campany Name:<span class="required">*</span></label></td>
      <td><input type="text" id="txtName" name="Comp_Name"></td></tr>
    <tr>
      <td><label for="txtPN">Phone Number:<span class="required">*</span></label></td>
      <td><input type="text" id="txtPN" name="Comp_NoTel"></td></tr>
    <tr>
      <td><label for="txtEmail">Email:<span class="required">*</span></label></td>
      <td><input type="text" id="txtEmail" name="Comp_Email"></td></tr>
    <tr>
    <td><label for="txtAddress">Address:<span class="required">*</span></label></td>
    <td><textarea aname = "Comp_Address" rows = "8" cols = "40"></textarea><br><br></td></tr>

    </table>
	
    <td style="text-align: center; padding-top: 60px"><input class="button" type="submit" name="submit" value="Submit" onclick="document.location:'viewReport.php'"></td></tr>
    <td style="text-align: center; padding-top: 60px"><input class="button" type="reset" name="reset" value="Reset" onclick="document.location:'viewReport.php'"></td></tr>

  </fieldset>
  </form>

</body>
</html>



