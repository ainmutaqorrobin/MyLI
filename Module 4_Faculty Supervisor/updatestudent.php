<?php

		session_start();

	    $p = $_SESSION['Presentation'];
        $m = $_SESSION['midterm'];
        $f = $_SESSION['final'];
        $id = $_SESSION['id'];

        $dbname = 'myli';
		$username = 'root';
		$password = '';
		
		$conn = mysqli_connect("localhost", $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
            
        $total = ($m + $f)/2;

        $totalmark = ($total/100)*100;	
			
		echo "Total mark for student" . " " . $id . " " . "is" . " " . $totalmark . "%";

		$sql = "UPDATE report SET AverageMark = '$totalmark' , Mid_Mark = '$m' , End_Mark = '$f' WHERE Stu_ID='$id'";

	if ($conn->query($sql) == TRUE) {
			echo "New record created successfully";
			$url = "studentperformance.php?totalmark=" . $totalmark;
			header("Location:" . $url);
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
        $conn->close();


?>
