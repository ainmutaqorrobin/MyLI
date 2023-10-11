<?php
$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());

//UPDATE INFO
$sql = "UPDATE industrysvinformation SET InsSV_ID = '$_POST[id]', InsSV_Name = '$_POST[name]', InsSV_NoTel = '$_POST[phonenum]', InsSV_Email = '$_POST[email]', Comp_Name = '$_POST[compName]', InsSV_Department = '$_POST[department]', Comp_Address = '$_POST[compAdd]', Comp_NoTel = '$_POST[noTel]' WHERE InsSV_Name = '$_POST[name]'";

//Execute the query
if(mysqli_query($link, $sql))
	header("refresh:1; url=IndustrySupervisorInfo.php");
else
	echo "Not Update";

?>