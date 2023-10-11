<html lang="en">
<head>
<title class="header">UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include("connect.php");
$query2 = "select count(Stu_ID) Total_User from internshipstudent UNION ALL 
select count(InsSV_ID) Total_User from industrysupervisor UNION ALL 
select count(FacSV_ID) Total_User from facultysupervisor UNION ALL 
select count(Coordinator_ID) Total_User from facultycoordinator ";  
 $result2 = mysqli_query($conn, $query2);
?>
<br>
<br>


</head>
<body onload="clock()">

<div class="header">
    <img src="ump.png" width="150" height="75"; >
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
  
	
<ul class="uli">
<li><a class="active" href="">Report</a></li>
</ul>


<div style="margin-left:25%;padding:80px 50px;">

  <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Total_User', 'Total_User'],  
                          <?php  
                           $i=0;
                          while($row2 = mysqli_fetch_array($result2))  
                          {     
                              if ($i==0)
                               $type="Intership Student";
                              else if ($i==1)
                              $type="Industry Supervisor";
                              else if ($i==2)
                              $type="Faculty Supervisor";
                              else if ($i==3)
                              $type="Faculty Coordinator";
                               echo "['".$type."', ".$row2   ["Total_User"]."],";  
                               $i=$i+1;
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


<?php

$query = "SELECT * FROM internshipstudent ORDER BY Stu_ID asc";
$query1 = "SELECT COUNT(Stu_ID) AS total FROM internshipstudent";
   
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);

$row1=mysqli_fetch_array($result1);
$totalarived = $row1['total'];




if (mysqli_num_rows($result) > 0){
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)){
        $matrikID = $row["Stu_ID"];
        $name = $row["Stu_Name"];
      


}
} else {
    echo "0 results";

}
    
	?>



 
<div id="piechart" style="width: 700px; height: 700px; margin-top:120px;"></div> 





</body>
</html>