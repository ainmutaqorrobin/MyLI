<?php

include("connect.php");

$studid = $_POST['studid'];
$name = $_POST['name'];
$matric = $_POST['id'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$department = $_POST['department'];
$compid = $_POST['compid'];




$query = "UPDATE industrysupervisor SET InsSV_Name='$name',InsSV_NoTel='$tel',InsSV_Department='$department',Stu_ID='$studid',InsSV_Email='$email',Comp_ID='$compid' WHERE InsSV_ID='$matric'";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/indsuplist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>