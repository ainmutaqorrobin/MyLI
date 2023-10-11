<?php

include('connect.php');

$query = "DELETE FROM facultysupervisor WHERE FacSV_ID='" . $_GET['id'] . "'";

if (mysqli_query($conn, $query)) 
{
    echo 'window.alert("Student Deleted Successfully");';
    header('Location:faccsuplist.php');
} else 
  {
    echo "Error deleting record: " . mysqli_error($conn);
  }

?>