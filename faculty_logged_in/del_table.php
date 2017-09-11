<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

// $sql="SELECT * FROM reg_fac WHERE sr_no=(SELECT id FROM logged_in)";
// $res=(mysqli_query($con,$sql));
// $fac_det=mysqli_fetch_assoc($res);
// echo"dec done"."<br>";

$date=$_POST['variable'];

$ctable_d_sql="DROP TABLE `$date`";
$ctable_d_exec=mysqli_query($con,$ctable_d_sql);
?>
