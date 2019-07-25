<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$db = "chart";

// Create connection
$connect= new mysqli($servername,$username,$password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$query="select * from barChart";
$result = $connect->query($query);
while($row = $result->fetch_assoc())
{
	  $GLOBALS['y10'] =$row["y10"];
	  $GLOBALS['y11'] =$row["y11"];
	  $GLOBALS['y12'] =$row["y12"];
	  $GLOBALS['y13'] =$row["y13"];
	  $GLOBALS['y14'] =$row["y14"];
	  $GLOBALS['y15'] =$row["y15"];
	  $GLOBALS['y16'] =$row["y16"];
	  $GLOBALS['y17'] =$row["y17"];
	  $GLOBALS['y18'] =$row["y18"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>chart</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"> </script>
</head>
<body>
	<!DOCTYPE html> 
<html> 
<head> 
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"> 
</script> 
</head> 
<body> 

<canvas id="myChart" width="900" height="400"></canvas> 
<script type="text/javascript"> 
var y10 = <?php echo $y10 ?>;
var y11 = <?php echo $y11 ?>;
var y12 = <?php echo $y12 ?>;
var y13 = <?php echo $y13 ?>;
var y14= <?php echo $y14 ?>;
var y15 = <?php echo $y15 ?>;
var y16 = <?php echo $y16 ?>;
var y17 = <?php echo $y17 ?>;
var y18 = <?php echo $y18 ?>;

var ctx = document.getElementById("myChart"); 
var myChart = new Chart(ctx, { 
type: 'bar', 
data: { 
	labels: ["CSE","Mech","ECE","EE","EEE","IT","BCA","MCA","MBA"], 
	datasets: [ 
	{ label: '# of students', 
		data: [y10,y11,y12,y13,y14,y15,y16,y17,y18], 
		backgroundColor :['rgba(255, 99, 132, 0.2)', 
				'rgba(54, 162, 235, 0.2)', 
				'rgba(255, 206, 86, 0.2)', 
				'rgba(75, 192, 192, 0.2)', 
				'rgba(153, 102, 255, 0.2)', 
				'rgba(255, 159, 64, 0.2)' 
], 

borderColor: [ 
				'rgba(255,99,132,1)', 
				'rgba(54, 162, 235, 1)', 
				'rgba(255, 206, 86, 1)', 
				'rgba(75, 192, 192, 1)', 
				'rgba(153, 102, 255, 1)', 
				'rgba(255, 159, 64, 1)' 
			], 
borderWidth : 1 
	} 
	] 
}, 
options: { 
		scales: { 
			yAxes: [{ 
				ticks: { 
					beginAtZero:true 
				} 
			}] 
		} 
	} 
}); 

	</script> 

</body> 
</html> 

</body>
</html>