<?php
	//create table
	include("connection.php");

	$sql = "CREATE TABLE internshipstudent (Stu_Name VARCHAR(50), Stu_NoTel VARCHAR(12), Stu_Email VARCHAR(50), Comp_Selection VARCHAR(30), PRIMARY KEY(Stu_ID))";

	mysqli_query($link, $sql); //or use $link->query($sql);

	//insert and save user input
	$Stu_Name = $_POST['Stu_Name'];
	$Stu_NoTel = $_POST['Stu_NoTel'];
	$Stu_Email = $_POST['Stu_Email'];
	$Comp_Selection = $_POST['Comp_Selection'];


	$query = "INSERT INTO internshipstudent (Stu_Name, Stu_NoTel, Stu_Email, Comp_Selection) VALUES ('$Stu_Name', '$Stu_NoTel', '$Stu_Email', '$Comp_Selection')";

	$result=mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('New data is inserted')</script>";
		?>
		<meta http-equiv="refresh" content="1; URL='http://localhost/Application/viewReport.php'" />
		
		<?php
	}
	else
	{
		echo "<script>alert('Error adding data')</script>".$link->error;
	}


	
	mysqli_close($link);
	?>