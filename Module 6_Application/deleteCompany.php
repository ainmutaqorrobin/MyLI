<?php
	
	include("connection.php");
	error_reporting(0);

	$no = $_GET['NO'];
	$query = "DELETE FROM company where  Comp_Name='" . $_GET['NO'] . "'";

	$result=mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('Company is deleted')</script>";
		?>
		<meta http-equiv="refresh" content="1; URL='http://localhost/Application/viewReport.php'" />
		
		<?php
	}
	else
	{
		echo "<script>alert('Company is not deleted')</script>".$link->error;
	}
?>





