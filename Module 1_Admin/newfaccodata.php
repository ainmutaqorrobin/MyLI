
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



$query = "INSERT INTO facultycoordinator (Coordinator_ID,FacSV_ID,Coordinator_Address,Coordinator_Notel,Coordinator_Email,Coordinator_Age,Coordinator_IC,Coordinator_Name,Coordinator_Faculty,Coordinator_Password) VALUES('$matric','$supid','$address','$tel','$email','$age','$ic','$name','$faculty','$pass')";
if (mysqli_query($conn, $query)) 
{
      
   echo "<script type='text/javascript'> window.location='/bad/faccolist.php' </script>";
	
} else 
{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>