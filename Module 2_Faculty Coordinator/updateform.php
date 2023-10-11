
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
<li><a class="active" href="stdcoorlist.php">Student-Coordinator Platform</a></li>
<li><a href="report.php">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px;background-color:#c6ecd9;">
<h2 class="solid">UPDATE DATA</h2>

<?php
$id =$_GET['id'];
echo $id;
?>


<form action="" method="POST" >
<table style="width:50%"; align="center">
<tr>
    <th colspan="2" class="a"><b class="a">PROFILE</b   ></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><input type="text" name="name"></td>
    </tr>
    <tr>
    <th><b>POSITION:</b></th>
    <td><input type="text" name="position"></td>
    </tr>   
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
    <input type="hidden" name= "<?php echo $id; ?>" >
  
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
    <input class="button" type="submit" name="save" value="save">
    </tr>
</div>
</table>
</form>
<hr>


</body>
</html>

<?php

include("connect.php");

$idURL = $_GET['id'];
if (isset($_POST['save']))
		{
            $name = $_POST["name"];
            $faculty = $_POST["faculty"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            $matrik= $_POST['matrik'];

             $query = "UPDATE facultysupervisor SET FacSV_Name='$name', FacSV_faculty='$faculty' ,FacSV_NoTel='$phone' , FacSV_Email='$email' ,Stu_ID= '$matrik' WHERE FacSV_ID='$idURL' ";


if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='stdcoorlist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
        }

?>


