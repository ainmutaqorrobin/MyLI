
<?php
include("connect.php");
$idURL = $_GET['id'];

$query = "DELETE FROM facultysupervisor WHERE FacSV_ID = '$idURL'";

$result = mysqli_query($conn,$query) or die ("Could not execute query ");
header("Location: stdcoorlist.php");
?>