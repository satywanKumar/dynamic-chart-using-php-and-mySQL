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
var LE = <?php echo $y10 ?>;

var ctx = document.getElementById("myChart"); 
var myChart = new Chart(ctx, { 
type: 'bar', 
data: { 
	labels: ["LE", "IT" , "ECE" , "EE", "ME", "BE"], 
	datasets: [ 
	{ label: '# of students', 
		data: [LE,124,78,91,62,56], 
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