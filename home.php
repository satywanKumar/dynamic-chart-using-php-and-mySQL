<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$hi = 10;
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
var LE = <?php echo $hi ?>;

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