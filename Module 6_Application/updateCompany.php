<?php
	include("connection.php");
	error_reporting(0);

	$no = $_GET['no'];
	$Comp_Name = $_GET['Comp_Name'];
	$Comp_NoTel = $_GET['Comp_NoTel'];
	$Comp_Email = $_GET['Comp_Email'];
	$Comp_Address = $_GET['Comp_Address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>UMP Intership Management System (MyLI)</title>

<link rel="stylesheet" href="style.css">

<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  table, th, td{
  border: 3px solid #c6ecd9;  
  border-collapse: collapse;
  padding:3px;
  background-color: #f2f2f2;
  text-align: center;
  margin-left: 5%;

}
/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

img{
  width: 12.4%;
  background-image: url("UMP.png");
  height: 80px;
  background-position: left;
  position: fixed;

}

/* Header/logo Title */
.header {
  padding :7px;
  text-align: center;
  background: #1abc9c;
  color: white;
  position: fixed;
  width: 100%;
  padding-bottom: 23px;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
  font-family: Stencil;
}

h2{
  text-align: center;
  font-family: Segoe UI Black;
}
.button {
  background-color: #508585;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 100px;
  height: 30px;
}


/* Navigation Bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 17%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  text-align:left;
  font-family:Myriad Pro Light;

}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #508585;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Border */
h2.solid{
  border-style:solid;
  text-align:center;
  
}

p.dashed{
  border-style:dashed;
  text-align:center;
  padding:50px;
}

/*content box*/
.bgbox{
  background-color: #c6ecd9;
}
table{
  text-align: center;
  background-color: #f2f2f2;
  border-color: #c6ecd9;
  border-width: 5px;
  width: 90%;
}
input{
  width: 99%;
}


.buttonDelete{
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.buttonEdit{
  background-color: #52D017;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  font-family: Myriad Pro Light;
  cursor: pointer;
  width: 80px;
  height: 30px;
}

.smallcolumn{
  width: 90px;
}

.bigcolumn{
  width: 200px;
}
</style>
</head>
<body onload="clock()">

<div class="header">
<h1><img src="UMP.png" width="12.4%" height="80px" position:"fixed" background-position: "left" margin: "10px" align="left"/>&emsp;&emsp;&emsp;&emsp;&emsp;UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<b class="italic"><span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span></b>
<br><br>
&nbsp;<a href="Login.php"><button type = "button">Logout</button></a>
</div>

<br><br><br><br><br><br><br><br><br><br><br>
	
<ul>
<li><a href="Homepage.php">Home</a></li>
<li><a href="compInformation.php">Company Information List</a></li>
<li><a href="compRegistration.php">Company Registration</a></li>
<li><a href="studentApplication.php">Student Application</a></li>
<li><a class="active" href="viewReport.php">View Report</a></li>
</ul>
</div>

<div class="bgbox" style="margin-left:18%; margin-right: 0.5%; padding-bottom: 5%">

      <br>	

<caption><h2 class="solid"> Application Page </h2><caption>


<caption><h2> Update Company Information </h2><caption>

<p>
<form action="/action_page.php" align="center">
<fieldset style="border-color:green">

	<form action="compRegistartion.php" method="GET">
		<table>
			<tr>
				<td>
				<div style="text-align: left;">
				<table>

			<tr><th>No.</th><td><input readonly="readonly" type="text" name="no" value="<?php echo "$no" ?>"></td></tr>

			<tr><th>Company Name</th><td><input type="text" name="Comp_Name" value="<?php echo "$Comp_Name" ?>"></td></tr>
			
			<tr><th>Phone Number</th><td><input type="text" name="Comp_NoTel" value="<?php echo "$Comp_NoTel" ?>"></td></tr>
			
			<tr><th>Email</th><td><input type="text" name="Comp_Email" value="<?php echo "$Comp_Email" ?>"></td></tr>

			<tr><th class="smallcolumn">Address</th>
				<td><input type="text" name="Comp_Address" value="<?php echo "$Comp_Address" ?>" ></td> </tr>
 
			</div></table></td>

			<td style="text-align: center; padding-top: 60px"><input class="button" type="submit" name="edit" value="Update"></td>
			</tr>
		</table>

	</form>
	
  </fieldset>
  </form>
  </p>

</body>
</html>

<?php

	include("connection.php");
	error_reporting();

	if($_GET['edit'])
	{
		$Comp_Name = $_GET['Comp_Name'];
		$Comp_NoTel = $_GET['Comp_NoTel'];
		$Comp_Email = $_GET['Comp_Email'];
		$Comp_Address = $_GET['Comp_Address'];

		$query = "UPDATE company SET Comp_Name='$Comp_Name', Comp_NoTel='$Comp_NoTel', Comp_Email='$Comp_Email', Comp_Address='$Comp_Address' where Comp_Name='$Comp_Name';
		$result=mysqli_query($link, $query);

		if($result)
		{
			echo "<script>alert('Record is updated')</script>";
			?>
			<meta http-equiv="refresh" content="1; URL='http://localhost/Application/viewReport.php'" />
			
			<?php
		}
		else
		{
			echo "<script>alert('Record is not updated')</script>".$link->error;
		}
	}
?>
