<?php 
session_start(); 
include "connection.php";

if (isset($_POST['Stu_ID']) && isset($_POST['Stu_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Stu_ID = validate($_POST['Stu_ID']);
	$Stu_Password = validate($_POST['Stu_Password']);

	if (empty($Stu_ID)) {
		header("Location: indx.php?error=User Name is required");
	    exit();
	}else if(empty($Stu_Password)){
        header("Location: indx.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        #$Stu_Password = md5($Stu_Password);

		$sql = "SELECT Stu_ID,Stu_Password FROM InternshipStudent WHERE Stu_ID='$Stu_ID' AND Stu_Password='$Stu_Password' ";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Stu_ID'] === $Stu_ID && $row['Stu_Password'] === $Stu_Password) {
            	$_SESSION['Stu_ID'] = $row['Stu_ID'];
            	header("Location:http://localhost/PROJECT/Homepage.php");
		        exit();
            }else{
				header("Location: studentLogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: studentLogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: studentLogin.php");
	exit();
}