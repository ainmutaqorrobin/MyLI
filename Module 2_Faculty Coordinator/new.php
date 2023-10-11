<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
    function display() {
      var info = document.myForm.info.value;
      
       document.getElementById("demo").innerHTML =
       ("info");
    }
    </script>

</head>
<body onload="clock()">

  
       
  
<div class="header">
    <img src="logo.png" width="150" height="75"; >

<h1>UMP Intership Management System (MyLI)</h1>
<span id="dayname">Day</span>,
<span id="month">Month</span>
<span id="daynum">00</span>,
<span id="year">Year</span>
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br>    
<a href="logout.php"><button class="button" type = "button">Logout</button>
</div>

	
<ul>
<li><a href="Homepage.php">Menu</a></li>
<li><a class="active" href="new.php">News & Announcement</a></li>
<li><a  href="profile.php">Profile</a></li>
<li><a  href="stdcoorlist.php">Student-Coordinator Platform</a></li>
<li><a  href="report.php">Report</a></li>
</ul>


<div style="margin-left:25%;padding: 20px;background-color:#c6ecd9;">
<marquee direction="left" class="news" scrollamount="20">
    NEWS NEWS NEWS NEWS NEWS NEW NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS
</marquee>

<a href="companyform.php".php">
    <button class="button" ">ADD COMPANY </button></a>
</form>



<br>



<br>
<div class="company">

    <?php
    include("connect.php");

    $query = "SELECT * FROM company";
   
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) >0){
        // output data of each row
        while($row = mysqli_fetch_assoc($result)){
    
        $id = $row["Comp_ID"];
       $name = $row["Comp_Name"];
        $address = $row["Comp_Address"];
        $phone = $row["Comp_NoTel"];
        $email = $row["Comp_Email"];
        
 
        ?>

       <table style="width:50%"; align="center"> 
    <th colspan="2" class="a"><b class="a" >PROFILE</b></a></th>
    </tr>
    <tr>
    <th><b>NAME:</b></th>
    <td ><?php echo $name  ?></td>
    </tr>
    <tr>
      <th><b>COMPANY ID:</b></th>  
      <td><?php echo $id  ?></td>
    </tr>
    <tr>
      <th><b>ADDRESS:</b></th>  
      <td><?php echo $address  ?></td>
    </tr>
    <tr>
    <th><b>PHONE NUMBER:</b></th>
    <td><?php echo $phone  ?></td>
    </tr>
    <tr>
    <th><b>EMAIL:<b></th>
    <td><?php echo $email ?></td>  
    <tr>
    <th><a href="editcompany.php?id=<?php echo $id; ?>">UPDATE</a></th>
    <th><a href="dellcompany.php?id=<?php echo $id; ?>">DELETE</a></th>
    </tr>
</table>
<hr>

<?php
    }
} 
else {
    echo "0 results";

}
?>
</div>



</body>
</html>