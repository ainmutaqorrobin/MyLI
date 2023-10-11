
<?php
include("connect.php");

$query = "SELECT * FROM company";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

    $id = $row["Comp_ID"];
	$name = $row["Comp_Name"];
    $address = $row["Comp_Address"];
    $phone = $row["Comp_NoTel"];
	$email = $row["Comp_Email"];
    }
}
	?>

<?php

$idURL = $_GET['id'];

$query = "DELETE FROM company WHERE Comp_ID = '$idURL'";

$result = mysqli_query($conn,$query) or die ("Could not execute query ");

header("Location: new.php");

?>  