<?php

$link = mysqli_connect("localhost","root") or die(mysqli_connect_error());
mysqli_select_db($link, "sinfo") or die(mysqli_error());

$error = "";

if(isset($_POST['submit'])) //module gan
{

  if(empty($_POST['username']) || empty($_POST['password']))
  {
    $error =  "Please enter the username and password";
  }
  else
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM logininssv WHERE username = '".$username."' AND password = '".$password."' limit 1";
  
    $result = mysqli_query($link, $sql);
  
    if(mysqli_num_rows($result)==1){
      header("location:Homepage.php");
    }
    else{
      echo $error = "Invalid username or password";
    }
  }
}

else if(isset($_POST['submit1'])) //module afiq
{

  if(empty($_POST['username']) || empty($_POST['password']))
  {
    $error =  "Please enter the username and password";
  }
  else
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM loginfacsv WHERE username = '".$username."' AND password = '".$password."' limit 1";
  
    $result = mysqli_query($link, $sql);
  
    if(mysqli_num_rows($result)==1){
      header("location:Homepage.html");
    }
    else{
      echo $error = "Invalid username or password";
    }
  }
}

else if(isset($_POST['submit2'])) //module robin
{

  if(empty($_POST['username']) || empty($_POST['password']))
  {
    $error =  "Please enter the username and password";
  }
  else
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM loginadmin WHERE username = '".$username."' AND password = '".$password."' limit 1";
  
    $result = mysqli_query($link, $sql);
  
    if(mysqli_num_rows($result)==1){
      header("location:Homepage.html");
    }
    else{
      echo $error = "Invalid username or password";
    }
  }
}

else if(isset($_POST['submit3'])) //module bad
{

  if(empty($_POST['username']) || empty($_POST['password']))
  {
    $error =  "Please enter the username and password";
  }
  else
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM loginfacco WHERE username = '".$username."' AND password = '".$password."' limit 1";
  
    $result = mysqli_query($link, $sql);
  
    if(mysqli_num_rows($result)==1){
      header("location:Homepage.html");
    }
    else{
      echo $error = "Invalid username or password";
    }
  }
}

else if(isset($_POST['submit4'])) //module su
{

  if(empty($_POST['username']) || empty($_POST['password']))
  {
    $error =  "Please enter the username and password";
  }
  else
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM loginstudent WHERE username = '".$username."' AND password = '".$password."' limit 1";
  
    $result = mysqli_query($link, $sql);
  
    if(mysqli_num_rows($result)==1){
      header("location:Homepage.html");
    }
    else{
      echo $error = "Invalid username or password";
    }
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Login.css">
</head>

<body style="background-color: #c6ecd9;">
  <div class="tajuk">
    <h2>UMP Internship Management System (MyLI)</h2>
  </div>

  <div class="border">
  <div class="logo">
    <br>
      <img src="UMP.png" alt="Logo UMP">
    </div>

    <br><br>
    <form method="POST" action="">
      <div class="userpass">

        <label for="Username"><b>Username</b></label>

        <div class="kotak">
          <input type="text" id="username" name="username">
          <br><br>
        </div>

        <label for="password"><b>Password</b></label>
        <div class="kotak">
          <input type="password" id="password" name="password">       
        </div>
      </div>
    <br>
    <div class = "error">
    <?php echo $error ?></div>
    
      <table>
        
        <tr>
          <td>
            <button onclick="myFunction()" name="submit2">Log as Admin</button>
            <br><br>
            <button onclick="myFunction()" name="submit1">Log as Faculty Supervisor</button>
           <br><br>
              <button onclick="myFunction()" name="submit3">Log as Faculty Coordinator</button>
           <br><br>
              <button type="submit" name="submit">Log as Industry Supervisor</button>
          <br><br>
            <button onclick="myFunction()" name="submit4">Log as Internship Student</button>
          </td>
          <td>
            <img src="qrcode.png" class="qr" alt="QR Code" style="width:200px;height:200px;">
          </td>
        </tr>      
      </table>
    </form>
  </div>
</div>



</body>
</html>