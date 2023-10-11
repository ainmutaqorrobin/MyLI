<?php

include('connect.php');

$query = "DELETE FROM facultycoordinator WHERE Coordinator_ID='" . $_GET['id'] . "'";

if (mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
    header('Location:faccolist.php');
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

?>