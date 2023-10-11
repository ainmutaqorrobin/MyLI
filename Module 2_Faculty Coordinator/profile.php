<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include("connect.php");
$query2 = "SELECT faculty, count(*) as number FROM lecturer GROUP BY faculty";  
 $result2 = mysqli_query($conn, $query2);
?>
<br>
<br>


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
<br>    
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>
  
	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a href="new.php">News & Announcement</a></li>
<li><a class="active" href="profile.php">Profile</a></li>
<li><a  href="stdcoorlist.php">Student-Coordinator Platform</a></li>
<li><a  href="report.php">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px;background-color:#c6ecd9;">
<?php   

$query = "SELECT * FROM facultycoordinator";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

    $id = $row["Coordinator_ID"];
	$name = $row["Coordinator_Name"];
    $age = $row["Coordinator_Age"];
    $faculty = $row["Coordinator_Faculty"];
    $phone = $row["Coordinator_Notel"];
	$email = $row["Coordinator_Email"];
    $address = $row["Coordinator_Address"];
    $ic =$row["Coordinator_IC"];
    $pwd =$row["Coordinator_Password"];


}   
}

	?>
<h2 class="solid">COORDINATOR PROFILE</h2>

<table style="width: 75%" ; align="center">
    <tr>
    <th colspan="2" class="a"><b class="a">PROFILE</b></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><?php echo $name  ?></td>
    </tr>
    <tr>
    <th><b>AGE:<b></th>
    <td><?php echo $age ?></td>
    </tr>
    <tr>
    <th><b>FACULTY:</b></th>
    <td><?php echo $faculty ?></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><?php echo $phone ?></td>
    </tr>
    <tr>    
    <th><b>EMAIL:<b></th>
    <td><?php echo $email ?></td>
    </tr>
    <tr>    
    <th><b>ADDRESS:<b></th>
    <td><?php echo $address ?></td>
    </tr>
    <tr>    
    <th><b>IC:<b></th>
    <td><?php echo $ic ?></td>
    </tr>

    
    
</table>




</body>
</html>