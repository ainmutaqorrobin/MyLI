
<?php 

$dbname = 'myli';
$username = 'root';
$password = '';
		
$conn = mysqli_connect("localhost", $username, $password, $dbname);

$sql = "SELECT Stu_ID , Mid_Mark , End_Mark , AverageMark FROM report";
$result = $conn->query($sql);

$chart_data = '';

while($row = mysqli_fetch_array($result))

{
 $chart_data .= "{ ID:'".$row["Stu_ID"]."', Mark:".$row["AverageMark"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | How to use Morris.js chart with PHP & Mysql</title>
  <link rel="stylesheet" href="design.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;margin-left: 500px;margin-top: 100px;">
   <h2 align="center">Student Performance</h2>
   <h1 align="center">Student's Average Mark </h1>   
   <br /><br />
   <div id="chart" style="width: 100%;"></div>
  </div>
 </body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'ID',
 ykeys:['Mark'],
 labels:['Average Mark'],
 hideHover:'auto',
});
</script>



