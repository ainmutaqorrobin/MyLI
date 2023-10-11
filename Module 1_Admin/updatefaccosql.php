<?php

include("connect.php");

$matric = $_POST['coid'];
$supid = $_POST['supid'];
$address = $_POST['address'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$ic = $_POST['ic'];
$name = $_POST['name'];
$faculty = $_POST['fak'];
$pass = $_POST['pass'];



$query = "UPDATE facultycoordinator SET Coordinator_ID='$matric',FacSV_ID='$supid',Coordinator_Address='$address',Coordinator_Notel='$tel',Coordinator_Email='$email',Coordinator_Age='$age',Coordinator_IC='$ic',Coordinator_Name='$name',Coordinator_Faculty='$faculty',Coordinator_Password='$pass' WHERE Coordinator_ID='$matric'";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/faccolist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>