


<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

	$sql = "SELECT * FROM reg_fac WHERE status=0 LIMIT 1";

	$fac_data = mysqli_query($con,$sql);
	$reg_fac=mysqli_fetch_assoc($fac_data);
	$sr_no = $reg_fac["sr_no"];

	
	// echo "
	// <script>
	// 	// var x = 5;
	// 	console.log($fac_data);
	// 	alert($fac_data);
	// </script>
	// ";
?>



<?php
		$sql = "UPDATE reg_fac SET status = 2 WHERE sr_no = $sr_no";
		$update_fac = mysqli_query($con,$sql);
		echo '<script>window.location.replace("create_fac_acc.php")</script>';


		// echo 'alert("Rejected. Please refresh the page.");';
?>