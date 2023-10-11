<?php

include('connect.php');

$query = "DELETE FROM industrysupervisor WHERE InsSV_ID='" . $_GET['id'] . "'";

if (mysqli_query($conn, $query)) 
{
    echo 'window.alert("Industry Supervisor Deleted Successfully");';
    header('Location:indsuplist.php');
} else 
  {
    echo "Error deleting record: " . mysqli_error($conn);
  }

?>