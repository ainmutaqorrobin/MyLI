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
<li><a class="active" href="Application/compInformation.php">Company Information List</a></li>
<li><a href="compRegistration.php">Company Registration</a></li>
<li><a href="studentApplication.php">Student Application</a></li>
<li><a href="viewReport.php">View Report</a></li>
</ul>
</div>

<div class="bgbox" style="margin-left:18%; margin-right: 0.5%; padding-bottom: 5%">	

	<br>

<caption><h2 class="solid"> Application Page </h2><caption>

<caption><h2> Company Information List </h2><caption>

<p class="table">

<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>	
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>PRESOFT (M) SDN. BHD.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-80682556</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>sales@presoft.com.my</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>No 2A-1, Jalan Puteri 2/5, Bandar Puteri, 47100 Puchong, Selangor, Malaysia.</td>
  </tr>
</table>

<br><br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>	
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>Averis Sdn. Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-27858888</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>averis_enquiries@averis.biz</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>Level 5, Tower 2, Avenue 5, Bangsar South City, No:8 Jalan Kerinchi, 59200 Kuala Lumpur Malaysia.</td>			
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>	
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>Brunsfield Management Services Sdn Berhad</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-77269898</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>bgoc@brunsfield.com</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>No 8 Jalan Wan Kadir 4, Off Jalan Damansara, Taman Tun Dr Ismail, 60000 Kuala Lumpur, Malaysia.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>Cardbiz Solutions Sdn Bhd</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-78903000</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>sales@cardbiz.com.my</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>No.8 Jalan Damansara, Empire City, PJU 8, 47820 Petaling Jaya, Selangor Darul Ehsan, Malaysia.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>HIERO7 (M) SDN. BHD</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>-</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>@nettium.net</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>Unit 13A-09, Jalan Stesen Sentral 2, 50470 Kuala Lumpur, Federal Territory of Kuala Lumpur.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>DOREMi Services & Rental Sdn. Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>1-800-88-3983</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>online@doremi.com.my</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>DOREMi Services & Rental Sdn Bhd, Jalan Batu Estate, Off Jalan Segambut, 51200 Kuala Lumpur.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>Kridentia Tech Sdn. Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+60-86886888</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>contact@kridentia.com</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>Unit 3-45, Blok 4811, CBD Perdana 2, Jalan Perdana, Cyber 12, 63000, Cyberjaya, Selangor, Malaysia.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>Theta Service Partner Sdn. Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-27154248</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>info@thetasp.com</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>03-08, Level 3, Tower A, Avenue 3 Bangsar South, No. 8 Jalan Kerinchi, 59200 Kuala Lumpur, Malaysia.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>PULSY Technology Sdn. Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-83244801</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>PULSY4U@PULSY.io</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>Malaysia Global Innovation and Creativity Centre, Block 3730, Persiaran Apec, Cyberjaya 63000, Selangor.</td>
  </tr>
</table></p>

<br><p>
<table style="width:85%" align="center" id="solid">
  <tr>
    <th colspan="2">Company Information</th> <!header title>
  </tr>
  <tr>
    <td class="myDetails" style="width: 15%; height: 15%"><b>Company Name</b></td>
    <td>BizAid Technologies Sdn Bhd.</td> 
  </tr>
  <tr>
    <td class="myDetails"><b>Phone Number</b></td>
    <td>+603-2201 8899</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Email</b></td>
    <td>cktan@mybizaid.net</td>
  </tr>
  <tr>
    <td class="myDetails"><b>Address</b></td>
    <td>BizAid Technologies Sdn Bhd, C-11-4,5,6, Wisma Goshen, Plaza Pantai, No.5 Jalan 4/83A, 59200 Kuala Lumpur.</td>
  </tr>
</table></p>

</div?

</body>
</html>






