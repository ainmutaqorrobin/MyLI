<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include("connect.php");
$query2 = "SELECT FacSV_Faculty, count(*) as number FROM facultysupervisor GROUP BY FacSV_Faculty";  
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
<li><a  href="profile.php">Profile</a></li>
<li><a  href="stdcoorlist.php">Student-Coordinator Platform</a></li>
<li><a class="active" href="">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px; background-color:#c6ecd9;">
<h2 class="solid">REPORT</h2>

  <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['FacSV_Faculty', 'Number'],  
                          <?php  
                          while($row2 = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row2["FacSV_Faculty"]."', ".$row2   ["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {   
                      //is3D:true,  
                      pieHole: 0.1  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  


<h3>BEST PERFORMANCE STUDENT</h3>
<?php

$query = "SELECT Report.End_Mark,internshipstudent.Stu_ID, internshipstudent.Stu_Name  FROM Report INNER JOIN internshipstudent ON Report.Stu_ID=internshipstudent.Stu_ID;";
$query1 = "SELECT COUNT(Stu_name) AS total FROM internshipstudent";
   
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);

$row1=mysqli_fetch_array($result1);
$totalarived = $row1['total'];


if (mysqli_num_rows($result) > 0){
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)){
        $matrikID = $row["Stu_ID"];
        $name = $row["Stu_Name"];
        $mark = $row["End_Mark"];
      


}
} else {
    echo "0 results";

}
    
	?>


<table style="width:80%;margin-left: auto;margin-right: auto;margin-bottom: 50px;">
    <tr>
    <th style="background-color:#508585";>MATRIC NUMBER</th>
    <th style="background-color:#508585";>  NAME </th>
   <th style="background-color:#508585;">MARKS</th>
</tr>
<tr>
<td><?php echo $matrikID  ?></td>
<td ><?php echo $name  ?></td>
<td><?php echo $mark  ?></td>
</tr>
<br>
</table>
<b>SUPERVISOR BY FACULTY</b> 
<div id="piechart" style="width: 400px; height: 400px;"></div> 



<hr>    
<table style="margin-top: 50px;">
<tr>
    <th  class="a"><b class="a">NUMBER OF STUDENT UNDER INTERNSHIP</b></a></th>

<td><?php echo $totalarived ?></td>
</tr>
</table>

</body>
</html>