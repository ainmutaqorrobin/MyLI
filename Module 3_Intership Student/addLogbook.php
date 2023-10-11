<?php
	//create table
	include("connection.php");

	$sql = "CREATE TABLE Logbook( Stu_ID VARCHAR(7), LogDate DATE, LogDay VARCHAR(10), LogActivity VARCHAR(100), PRIMARY KEY(LogDate))";

	mysqli_query($link, $sql); //or use $link->query($sql);

	//insert and save user input
	$Stu_ID = 'CB19022';
	$LogDate = $_POST['LogDate'];
	$LogDay = $_POST['LogDay'];
	$LogActivity = $_POST['LogActivity'];

	$query = "INSERT INTO Logbook (Stu_ID, LogDate, LogDay, LogActivity) values ('$Stu_ID', '$LogDate', '$LogDay', '$LogActivity')";

	$result=mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('New data is inserted')</script>";
		?>
		<meta http-equiv="refresh" content="1; URL='http://localhost/PROJECT/onlineLogbook.php'" />
		
		<?php
	}
	else
	{
		echo "<script>alert('Error adding data')</script>".$link->error;
	}


	
	mysqli_close($link);
	?>