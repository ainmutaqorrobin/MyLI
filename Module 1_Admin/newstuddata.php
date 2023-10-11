
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



$query = "INSERT INTO internshipstudent (Stu_ID,Stu_Password,Coordinator_ID,Stu_Name,Stu_IC,Stu_Faculty,Stu_Programme,Stu_NoTel,Stu_Email,Stu_Address) VALUES('$matric','$pass','$coid','$name','$ic','$faculty','$prog','$phonenum','$email','$address')";
if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='/bad/studlist.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>