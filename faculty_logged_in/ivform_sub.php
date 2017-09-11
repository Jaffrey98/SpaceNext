<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

$sql="SELECT * FROM reg_fac WHERE sr_no=(SELECT id FROM logged_in)";
$res=(mysqli_query($con,$sql));
$fac_det=mysqli_fetch_assoc($res);
echo"dec done";
$sn_name=$_POST['sn_name'];
$sn_id=$_POST['sn_id'];
$sn_ns=$_POST['nstudents'];
$date=$_POST['date'];
$dt=(string)$date;
echo"dec 1";
$ctable_sql="CREATE TABLE '$dt'( id INT NOT NULL AUTO_INCREMENT , fac_sr_no INT NOT NULL , st_name VARCHAR(25) NOT NULL , st_uname VARCHAR(25) NOT NULL , cost INT NOT NULL , PRIMARY KEY (id))";
echo"dec 2";
$var=mysqli_query($con,$ctable_sql);
echo"dec 3";
// echo "$sn_name[0]";
?>
