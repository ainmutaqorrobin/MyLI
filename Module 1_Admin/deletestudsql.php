<?php

include('connect.php');

$query = "DELETE FROM internshipstudent WHERE Stu_ID='" . $_GET['id'] . "'";

if (mysqli_query($conn, $query)) 
{
    echo 'window.alert("Student Deleted Successfully");';
    header('Location:studlist.php');
} else 
  {
    echo "Error deleting record: " . mysqli_error($conn);
  }

?>