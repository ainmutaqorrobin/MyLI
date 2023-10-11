<?php
    include("connection.php");
    error_reporting(0);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="style.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  table, th, td{
  border: 3px solid #c6ecd9;
  border-collapse: collapse;
  padding:3px;
  background-color: #f2f2f2;
  text-align: left;
  background-color: #f2f2f2;
  margin: 25px;
}
/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

img{
  width: 12.4%;
  background-image: url("UMP.png");
  height: 80px;
  background-position: left;
  position: fixed;

}

/* Header/logo Title */
.header {
  padding :7px;
  text-align: center;
  background: #1abc9c;
  color: white;
  position: fixed;
  width: 100%;
  padding-bottom: 23px;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
  font-family: Stencil;
}

h2{
  text-align: center;
  font-family: Segoe UI Black;
}
.button {
  background-color: #508585;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 100px;
  height: 30px;
}


/* Navigation Bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 17%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  text-align:left;
  font-family:Myriad Pro Light;

}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #508585;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Border */
h2.solid{
  border-style:solid;
  text-align:center;
  
}

p.dashed{
  border-style:dashed;
  text-align:center;
  padding:50px;
}

/*content box*/
.bgbox{
  background-color: #c6ecd9;
}
table{
  width: 95%;
  text-align: left;
  background-color: #f2f2f2;
  border-color: #c6ecd9;
  border-width: 5px;
  margin: 25px;
}
input{
  width: 80%
}
textarea{
  width: 80%;
}

.buttonDelete{
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.buttonEdit{
  background-color: #52D017;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.smallcolumn{
  width: 90px;
}

.bigcolumn{
  width: 200px;
}
  </style>
</head>
<body onload="clock()">

<div class="header">
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Intership Management System (MyLI)</h1><span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br><br><a href="login.php"><button type = "button">Logout</button></a>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<div>
<div>	
  <ul>
  <li><a href="Homepage.php">Home</a></li>
  <li><a href="onlineLogbook.php">Logbook</a></li>
  <li><a href="supervisorInformation.php">Supervisor Information</a></li>
  <li><a class="active" href="studentPerformance.php">Student Performance</a></li>
  </ul>
  </div>


<div class="bgbox" style="margin-left:18%; margin-right: 0.5%;">
	<br>
<h2>STUDENT PERFORMANCE REPORT</h2>
<form>
		<table border="1" cellspacing="7">
		<?php
		include("connection.php");
		error_reporting(0);

		$sql = "SELECT Stu_ID,Stu_Name FROM InternshipStudent WHERE Stu_ID='CB19022'";
		    $sql_run = mysqli_query($link, $sql);
		    $total = mysqli_num_rows($sql_run);

		    if($total!=0)
		    { 
			while($row = mysqli_fetch_array($sql_run))
			    {
			    	 
			    ?>
			<tr><th class="bigcolumn">ID</th><td><?php echo $row['Stu_ID']; ?></td></tr>
			<tr><th class="bigcolumn">Name</th><td><?php echo $row['Stu_Name']; ?></td></tr>
			<?php
			}
		}
		else
		{
			echo "No records found";
		}
	?>	
		</table>
		<table border="1" cellspacing="7">
      
		<?php


		$sql = "SELECT Mid_Mark,End_Mark FROM Report WHERE Stu_ID='CB19022'";
		    $sql_run = mysqli_query($link, $sql);
		    $total = mysqli_num_rows($sql_run);

		    if($total!=0)
		    { 
			while($row = mysqli_fetch_array($sql_run))
			{
			    	 
			?>
      <tr><th colspan="2" style="text-align: center;" >Mark</th><tr>
			<tr><th class="bigcolumn">Mid-Semester</th><td><?php echo $row['Mid_Mark']; ?> / 40 </td></tr>
			<tr><th>End-Semester</th><td><?php echo $row['End_Mark']; ?> / 60 </td></tr>
						<?php
			
			}
		}
		else
		{
			echo "No records found";
		}
	?>	
			<?php
			$query="SELECT SUM(Mid_Mark + End_Mark ) as total_mark FROM Report";
			$retrive = mysqli_query($link, $query);

	        while($row = mysqli_fetch_array($retrive))
	        {
            ?>

			<tr><th>Total Mark (%) </th><td><?php echo $row['total_mark'] ; ?> % </td></tr>
				<?php
                }
            
                ?>
			</table>

		
		<table border="1" cellspacing="7">
		<?php
		include("connection.php");
		error_reporting(0);

		$sql = "SELECT * FROM Logbook WHERE Stu_ID='CB19022'";
		    $sql_run = mysqli_query($link, $sql);
		    $total = mysqli_num_rows($sql_run);
		 ?>

			<tr><th class="bigcolumn">Attendance</th><td><?php echo $total; ?> / 122</td></tr>
		</table>

		<?php


		$query = "SELECT Comments, count(*) as number FROM Logbook GROUP BY Comments";  
		 $result = mysqli_query($link, $query);
		?>
		<br>
		<br>
		<h2>MYLI PERFORMANCE</h2>
    <table>
      <?php


    $sql = "SELECT SUM(Marks) as totalTM FROM Logbook";
        $sql_run = mysqli_query($link, $sql);
        $total = mysqli_num_rows($sql_run);

        if($total!=0)
        { 
      while($row = mysqli_fetch_array($sql_run))
      {

      ?>
    <tr><th colspan="2" style="text-align: center;" >Mark</th><tr>
      <tr><th width="400px">Average Weekly Industrial Training Mark </th><td style="text-align: center;"><?php echo ($row['totalTM'] / 80 * 100) ;?> % </td></tr>
  <?php

      }
    }
    else
    {
      echo "No records found";
    }
  ?>
    </table>
		  <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Comments', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Comments"]."', ".$row["number"]."],";  
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
      </head>  
      <body>  
           <br/><br/>  
           <div >  
                <div id="piechart" style="width: 75%; height: 75%; margin-left: 12%;background-color: #c6ecd9"></div>  
        
           </div>  
      </body>
      <br>
		<div style="margin-left: 40%; margin-bottom: 20px;">
		<button style="width: 220px;" class="button" onclick="window.print()">Print Student Report</button></div>
	</form>
	<br>
	<br>
</div>
</div>

</body>
</html>

