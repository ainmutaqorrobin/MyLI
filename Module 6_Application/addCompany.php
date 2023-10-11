<?php
	//create table
	include("connection.php");

	$sql = "CREATE TABLE company (Comp_Name VARCHAR(50), Comp_NoTel VARCHAR(11), Comp_Email VARCHAR(50), Comp_Address VARCHAR(100), PRIMARY KEY(Comp_ID))";

	mysqli_query($link, $sql); //or use $link->query($sql);

	//insert and save user input
	$Comp_Name = $_POST['Comp_Name'];
	$Comp_NoTel= $_POST['Comp_NoTel'];
	$Comp_Email = $_POST['Comp_Email'];
	$Comp_Address = $_POST['Comp_Address'];


	$query = "INSERT INTO company (Comp_Name, Comp_NoTel, Comp_Email, Comp_Address) values ('$Comp_Name', '$Comp_NoTel', '$Comp_Email', '$Comp_Address')";

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