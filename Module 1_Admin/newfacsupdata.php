
<?php

include("connect.php");

$matric = $_POST['id'];
$name = $_POST['name'];
$tel = $_POST['phone'];
$faculty = $_POST['faculty'];
$email = $_POST['email'];
$pos = $_POST['pos'];
$studid = $_POST['studid'];



$query = "INSERT INTO facultysupervisor (FacSV_ID,FacSV_Name,FacSV_NoTel,FacSV_Faculty,FacSV_Email,FacSV_Position,Stu_ID) VALUES('$matric','$name','$tel','$faculty','$email','$pos','$studid')";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/facsuplist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>