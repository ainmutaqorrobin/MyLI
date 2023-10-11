<?php
	
	include("connection.php");
	error_reporting(0);

	$no = $_GET['NO'];
	$query = "DELETE FROM internshipstudent where  Stu_Name='" . $_GET['NO'] . "'";

	$result=mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('Student is deleted')</script>";
		?>
		<meta http-equiv="refresh" content="1; URL='http://localhost/Application/viewReport.php'" />
		
		<?php
	}
	else
	{
		echo "<script>alert('Student is not deleted')</script>".$link->error;
	}
?>





