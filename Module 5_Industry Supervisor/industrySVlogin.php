<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="loginpage.css">
</head>
<body>
     <form action="indexIndustrySV.php" method="post">
     	<h2>INDUSTRY SUPERVISOR LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="InsSV_ID" placeholder="industry supervisor id"><br>

     	<label>Password</label>
     	<input type="password" name="InsSV_Password" placeholder="password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>