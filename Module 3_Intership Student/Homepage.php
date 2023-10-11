<!DOCTYPE html>
<html lang="en">
<head>
<title>UMP Intership Management System (MyLI)</title>
<link rel="stylesheet" href="design.css">
<script src="./javascript.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	table, th, td{
  border: 3px solid #c6ecd9;
  border-collapse: collapse;
  padding:3px;
  background-color: #f2f2f2;
  text-align: center;
  background-color: #f2f2f2;
  margin: 25px;
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
.table{
  width: 95%;
  text-align: center;
  background-color: #f2f2f2;
  border-color: #c6ecd9;
  border-width: 5px;
  margin: 25px;
}
.input{
  width: 80%
}
.textarea{
  width: 80%;
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
<span id="hour">00</span>:
<span id="minutes">00</span>:
<span id="seconds">00</span>
<span id="period">AM</span>
<br><br><a href="login.php"><button type = "button">Logout</button></a>
	</div>
<br><br><br><br><br><br><br><br><br><br><br> 

<ul>
<li><a class="active" href="Homepage.php">Home</a></li>
<li><a href="onlineLogbook.php">Logbook</a></li>
<li><a href="supervisorInformation.php">Supervisor Information</a></li>
<li><a href="studentPerformance.php">Student Performance</a></li>
</ul>

<div class="bgbox" style="margin-left:18%; margin-right: 0.5%; padding-bottom: 8%">
	<br>
	<div class = "home" >
<h2 class="solid"> Welcome to UMP Intership Management System(MyLI)</h2>
<p class="dashed">MyLI is a web-based system used to promote and exchange industrial 
training information management. It was created to emphasize the aspect of 
gathering information from students, industry training coordinators and lectures. 
Information is captured and stored in a centralized database so that multiple users 
can access it through the Internet.</p>

</div>

</body>
</html>

