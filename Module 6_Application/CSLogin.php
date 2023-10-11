<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
<style>
body {
	background: #1abc9c;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: black;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: green;
	padding: 10px 15px;
	color: white;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: blue;
}
.ca:hover {
	text-decoration: underline;
} 

</style>
</head>
<body>
     <form action="index.php" method="post">
     	<h2>COMPANY & STUDENT LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Company/Student ID</label>
     	<input type="text" name="CS_ID" placeholder="company/student id"><br>

     	<label>Password</label>
     	<input type="password" name="CS_Password" placeholder="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>