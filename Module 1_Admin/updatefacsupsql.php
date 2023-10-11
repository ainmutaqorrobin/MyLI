<?php

include("connect.php");

$matric = $_POST['id'];
$name = $_POST['name'];
$tel = $_POST['phone'];
$faculty = $_POST['faculty'];
$email = $_POST['email'];
$pos = $_POST['pos'];
$studid = $_POST['studid'];



$query = "UPDATE facultysupervisor SET FacSV_Name='$name',FacSV_NoTel='$tel',FacSV_Faculty='$faculty',Stu_ID='$studid',FacSV_Email='$email',FacSV_Position='$pos' WHERE FacSV_ID='$matric'";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/facsuplist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>