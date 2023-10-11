<?php

include("connect.php");

$matric = $_POST['matric'];
$pass = $_POST['studpass'];
$coid = $_POST['coid'];
$name = $_POST['name'];
$ic = $_POST['ic'];
$faculty = $_POST['fak'];
$prog = $_POST['programme'];
$phonenum = $_POST['phonenum'];
$email = $_POST['email'];
$address = $_POST['address'];



$query = "UPDATE internshipstudent SET Stu_ID='$matric',Stu_Password='$pass',Coordinator_ID='$coid',Stu_Name='$name',Stu_IC='$ic',Stu_Faculty='$faculty',Stu_Programme='$prog' WHERE Stu_ID='$matric'";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/studlist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>