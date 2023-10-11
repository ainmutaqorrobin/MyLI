<?php 
session_start(); 
include "connection.php";

if (isset($_POST['CS_ID']) && isset($_POST['CS_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$CS_ID = validate($_POST['CS_ID']);
	$CS_Password = validate($_POST['CS_Password']);

	if (empty($CS_ID)) {
		header("Location: indx.php?error=User Name is required");
	    exit();
	}else if(empty($CS_Password)){
        header("Location: indx.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        #$CS_Password = md5($CS_Password);

		$sql = "SELECT CS_ID,CS_Password FROM internshipstudent WHERE CS_ID='$CS_ID' AND CS_Password='$CS_Password' ";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['CS_ID'] === $CS_ID && $row['CS_Password'] === $CS_Password) {
            	$_SESSION['CS_ID'] = $row['CS_ID'];
            	header("Location:http://localhost/Application/compInformation.php");
		        exit();
            }else{
				header("Location: CSLogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: CSLogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: CSLogin.php");
	exit();
}