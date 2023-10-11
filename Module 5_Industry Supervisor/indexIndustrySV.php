<?php 
session_start(); 

$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "MyLI") or die(mysqli_error());


if (isset($_POST['InsSV_ID']) && isset($_POST['InsSV_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$InsSV_ID = validate($_POST['InsSV_ID']);
	$InsSV_Password = validate($_POST['InsSV_Password']);

	if (empty($InsSV_ID)) {
		header("Location: indexIndustrySV.php?error=User Name is required");
	    exit();
	}else if(empty($InsSV_Password)){
        header("Location: indexIndustrySV.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        #$Stu_Password = md5($Stu_Password);

		$sql = "SELECT InsSV_ID,InsSV_Password FROM loginInsSV WHERE InsSV_ID='$InsSV_ID' AND InsSV_Password='$InsSV_Password' ";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['InsSV_ID'] === $InsSV_ID && $row['InsSV_Password'] === $InsSV_Password) {
            	$_SESSION['InsSV_ID'] = $row['InsSV_ID'];
            	header("Location:Homepage.php");
		        exit();
            }else{
				header("Location: industrySVlogin.php?error=Incorect User name or password");
		        exit();
			}
		}
	}
	
}else{
	header("Location: industrySVlogin.php");
	exit();
}