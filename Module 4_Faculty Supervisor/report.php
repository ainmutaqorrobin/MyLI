<?php
        $dbname = 'myli';
		$username = 'root';
		$password = '';

		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT internshipstudent.Stu_ID, internshipstudent.Stu_Name, internshipstudent.Stu_IC, internshipstudent.Stu_Faculty, internshipstudent.Stu_Programme, report.Mid_Mark, report.End_Mark, report.AverageMark FROM internshipstudent INNER JOIN Report ON internshipstudent.Stu_ID=report.Stu_ID;";
		$result = $conn->query($sql);
                                                                                          
		if ($result == TRUE) {
			 while($row = mysqli_fetch_assoc($result)) 
			 {

			 	$id =  $row['Stu_ID']; 
			 	$name = $row['Stu_Name']; 
			 	$ic =  $row['Stu_IC']; 
			 	$faculty = $row['Stu_Faculty']; 
			 	$programme = $row['Stu_Programme'];
			 	$mid =  $row['Mid_Mark']; 
			 	$end = $row['End_Mark']; 
			 	$average = $row['AverageMark'];
		

		}
}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
		
?>	

<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div style="padding:50px 50px;">
<h2 class="solid" style="width:1900px;margin-left: -45px;font-size: 42px;">Student report</h2>

<hr style="margin-left: -70px">
<div>

<table style="border: 1px solid black;width: 30%;margin-top: 40px;margin-left: 650px;">
	<tr>
		<th>Student ID</th>
		<td><?php echo $id ?></td>
	</tr>
	<tr>
		<th>Student Name</th>
		<td><?php echo $name ?></td>
	</tr>
	</tr>
	<tr>
		<th>Student IC</th>
		<td><?php echo $ic ?></td>
	</tr>
	</tr>
	<tr>
		<th>Student Faculty</th>
		<td><?php echo $faculty ?></td>
	</tr>
	</tr>
	<tr>
		<th>Student Programme</th>
		<td><?php echo $programme ?></td>
	</tr>
	</tr>	
	<tr>
		<th>Mid Mark</th>
		<td><?php echo $mid ?>/40</td>
	</tr>
	<tr>
		<th>End Mark</th>
		<td><?php echo $end ?>/60</td>
	</tr>	
	<tr>
		<th>Average Mark in (%)</th>
		<td><?php echo $average ?>%</td>
	</tr>
	<tr>
		<th>Comments</th>
		<td>Excellent</td>
	</tr>		
</div>
</div>
</table>

<button class="a" style="margin-left: 860px;margin-top: 40px;" onclick="window.print()">Print this page</button>
</body>
</html>