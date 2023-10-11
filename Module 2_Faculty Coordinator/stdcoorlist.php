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
<br>    
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>
  
	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a href="new.php">News & Announcement</a></li>
<li><a  href="profile.php">Profile</a></li>
<li><a class="active" href="#">Student-Coordinator Platform</a></li>
<li><a href="report.php">Report</a></li>
</ul>
<a href="lecturer.php">
<button class="button" ">ADD </button>
</a>
<div style="margin-left:25%;padding:80px 50px;background-color:#c6ecd9;">
<h2 class="solid">Supervisor</h2>   




<?php
include("connect.php");

$query = "SELECT facultysupervisor.FacSV_ID ,facultysupervisor.FacSV_Name ,facultysupervisor.FacSV_Faculty ,facultysupervisor.FacSV_NoTel ,facultysupervisor.FacSV_Email ,facultysupervisor.FacSV_Position ,internshipstudent.Stu_ID, internshipstudent.Stu_Name  FROM facultysupervisor INNER JOIN internshipstudent ON facultysupervisor.Stu_ID=internshipstudent.Stu_ID;";

$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

    $id = $row["FacSV_ID"];
	$name = $row["FacSV_Name"];
    $faculty = $row["FacSV_Faculty"];
    $phone = $row["FacSV_NoTel"];
	$email = $row["FacSV_Email"];
    $stuID = $row["Stu_ID"];
    $name1= $row['Stu_Name'];
    $position = $row["FacSV_Position"];

	?>

<table style="width:50%">
<tr>
    <th colspan="2" class="a"><b class="a">PROFILE</b></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><?php echo $name  ?></td>
    </tr>
    <tr>
    <th><b>ID:<b></th>
    <td><?php echo $id ?></td>
    </tr>
    <tr>
    <th><b>POSITION:<b></th>
    <td><?php echo $position ?></td>
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
    <th colspan="3" style="text-align: center;" class="a"><b class="b">STUDENT</b></th>
</tr>
<tr>
<th><b>MATRIK ID</b></th>
<th colspan="2"><b>NAME</b></th>
</tr>
<tr>
<td><?php echo $stuID ?></td>
<td><?php echo $name1 ?></td>


    <tr>
    <th><a href="updateform.php?id=<?php echo $id; ?>">UPDATE</a></th>
    <th><a href="dellecturer.php?id=<?php echo $id; ?>">DELETE</a></th>
    </tr>

</tr>

 
</table>
<hr>


<?php
    }
} else {
    echo "0 results";

}
?>



</body>
</html>
