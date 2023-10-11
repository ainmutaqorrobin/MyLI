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
<li><a href="compRegistration.php">Company Registration</a></li>
<li><a href="studentApplication.php">Student Application</a></li>
<li><a class="active" href="viewReport.php">View Report</a></li>
</ul>
</div>

<div class="bgbox" style="margin-left:18%; margin-right: 0.5%; padding-bottom: 5%">

      <br>	

<caption><h2 class="solid"> Application Page </h2><caption>

<caption><h2> Company List </h2><caption>

<p class="table">
<form>
<table style="width:85%" align="center" id="solid">
		<tr style="text-align: center;">
			<th>No.</th>
			<th class="smallcolumn">Company Name</th>
			<th class="smallcolumn">Phone Number</th>
			<th class="bigcolumn">Email</th>
			<th class="bigcolumn">Address</th>
			<th class="bigcolumn">Action</th>
		</tr>
		
		
		<?php
		$link = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($link, "myli");

		$sql = "SELECT Comp_Name,Comp_NoTel,Comp_Email,Comp_Address FROM company";
	    $sql_run = mysqli_query($link, $sql);
	    $total = mysqli_num_rows($sql_run);
      $number = 1;

	    if($total!=0)
	    { 
		    while($row = mysqli_fetch_array($sql_run))
		    {
		    	 
		    echo "
			<tr>
				<td>".$number."</td> 
				<td>".$row['Comp_Name']."</td>
				<td>".$row['Comp_NoTel']."</td>
				<td>".$row['Comp_Email']."</td>
				<td>".$row['Comp_Address']."</td>

                            
				<td><a href= 'updateCompany.php?no=$number&Comp_Name=$row[Comp_Name]&Comp_NoTel=$row[Comp_NoTel]&Comp_Email=$row[Comp_Email]&Comp_Address=$row[Comp_Address]'>Update<br><br>
				<a href = 'deleteCompany.php?NO=$row[Comp_Name]' onclick='return checkdelete()'>Delete</td>
			</tr>
			";
      $number++; 
			}
		}
		else
		{
			echo "No records found";
		}
	?>			
</table>
		<script type="text/javascript">
			function checkdelete()
			{
				return confirm('Are you sure want to delete this record?');
			}
		</script>	
	
</form>
</p>


<br><caption><h2> Student List </h2><caption>

<p>
<table style="width:85%" align="center" id="solid">

		<tr style="text-align: center;">
			<th>No.</th>
			<th class="smallcolumn">Student Name</th>
			<th class="smallcolumn">Phone Number</th>
			<th class="bigcolumn">Email</th>
			<th class="bigcolumn">Company Selection</th>
			<th class="bigcolumn">Action</th>
		</tr>


		<?php
		$link = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($link, "myli");

		$sql = "SELECT Stu_Name,Stu_NoTel,Stu_Email,Comp_Selection FROM internshipstudent";
	    $sql_run = mysqli_query($link, $sql);
	    $total = mysqli_num_rows($sql_run);
      $number = 1;

	    if($total!=0)
	    { 
		    while($row = mysqli_fetch_array($sql_run))
		    {
		    	 
		    echo "
			<tr>
				<td>".$number."</td> 
				<td>".$row['Stu_Name']."</td>
				<td>".$row['Stu_NoTel']."</td>
				<td>".$row['Stu_Email']."</td>
				<td>".$row['Comp_Selection']."</td>

                            
				<td><a href= 'updateStudent.php?no=$number&Stu_Name=$row[Stu_Name]&Stu_NoTel=$row[Stu_NoTel]&Stu_Email=$row[Stu_Email]&Comp_Selection=$row[Comp_Selection]'>Update<br><br>
				<a href = 'deleteStudent.php?NO=$row[Stu_Name]' onclick='return checkdelete()'>Delete</td>
			</tr>
			";
      $number++; 
			}
		}
		else
		{
			echo "No records found";
		}
	?>	

</table>
		<script type="text/javascript">
			function checkdelete()
			{
				return confirm('Are you sure want to delete this record?');
			}
		</script>	
	
</form>

      <br>
		<div style="margin-left: 45%; margin-bottom: 20px;">
		<button style="width: 100px;" class="button" onclick="window.print()">Print</button></div>
	</form>

</p><br>


		<h2>Percentage of Company & Student List</h2>
		  <title>PIE CHART</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Comp_ID', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Comp_ID"]."', ".$row["number"]."],";  
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
		<button style="width: 100px;" class="button" onclick="window.print()">Print</button></div>
	</form>
	<br>
	<br>
</div>
</div>

</body>
</html>



