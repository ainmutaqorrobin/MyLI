
<?php

include("connect.php");

$studid = $_POST['studid'];
$name = $_POST['name'];
$matric = $_POST['id'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$department = $_POST['department'];
$compid = $_POST['compid'];



$query = "INSERT INTO industrysupervisor (Stu_ID,InsSV_Name,InsSV_ID,InsSV_NoTel,InsSV_Email,InsSV_Department,Comp_ID) VALUES('$studid','$name','$matric','$tel','$email','$department','$compid')";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/indsuplist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>