<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Login.css">
<style>
.border {
  background: #1abc9c;
  margin-left: 230px;
  border-style: solid;
  width: 800px;
  height: 500px;
}
</style>
</head>

<body>
  <div class="tajuk">
    <h2>UMP Internship Management System (MyLI)</h2>
  </div>

  <div class="border">
	<div class="logo">
	  <br>
      <img src="UMP.png" alt="Logo UMP">
    </div>

    <br><br>
      <table>
        
       <tr>
          <td>
            <button onclick="myFunction()">Log as Admin</a></button>
            <br><br>
            <button onclick="myFunction()">Log as Faculty Supervisor</button>
           <br><br>
              <button onclick="myFunction()">Log as Faculty Coordinator</button>
           <br><br>
            <a href="industrySVlogin.php"><button onclick="myFunction()">Log as Industry Supervisor</button></a>
          <br><br>
            <a href="studentLogin.php"><button onclick="myFunction()">Log as Student</button></a>
          </td>
          <td>
            <img src="qrcode.png" class="qr" alt="QR Code" style="width:200px;height:200px;">
          </td>
        </tr>
      </table>
    </form>
  </div>



</body>
</html>