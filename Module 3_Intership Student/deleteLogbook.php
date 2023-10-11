<?php
	
	include("connection.php");
	error_reporting(0);

	$no = $_GET['NO'];
	$query = "DELETE FROM Logbook where LogDate='$no'";

	$result=mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('Record is deleted')</script>";
		?>
		<meta http-equiv="refresh" content="1; URL='http://localhost/PROJECT/onlineLogbook.php'" />
		
		<?php
	}
	else
	{
		echo "<script>alert('Record is not deleted')</script>".$link->error;
	}
?>


