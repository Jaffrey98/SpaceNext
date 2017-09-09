<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

// function signup($con)
// {

// 	echo "hello signup";
// 	if (!empty($_POST['username'])) {
// 		$query = mysqli_query($con, "SELECT * FROM user WHERE userName = '$_POST[username]' AND password = '$_POST[pass]'") or die(mysqli_error($con));

// 		if (!$row = mysqli_fetch_array($query) or die(mysqli_error($con))) {
// 			echo "bhosadike";
// 			NewUser($con);
// 		}
// 		else
// 		{
// 			echo "Sorry, you are already registered. Please fuck off. B-)";
// 		}
// 	}
// }


// function NewUser($con){
// 	$name = $_POST['name'];
// 	$username = $_POST['username'];
// 	$email = $_POST['email'];
// 	$password = $_POST['pass'];
// echo "sex Bitchessssss";
// 	$query = "INSERT INTO user (name,username, email, password) VALUES ('$name','$username','$email','$password')";
// echo "hi aarish\n\n";
// 	$data = mysqli_query($con, $query) or die(mysqli_error($con));
// echo "hi glady";
// 	if($data){
// 		echo "Thank you for registering with us!";
// 	}
// }

if (isset($_POST['submit'])) {
	//echo "Signed Up Bitchessssss!!!";

	create_iv($con);
}

//date("Y/m/d")
function create_iv($con)
{
	$fname = $_POST['fname'];
	$fid = $_POST['fid'];
	$desg = $_POST['desg'];
	$insname = $_POST['insname'];
	$address = $_POST['address'];
	$nstudents = $_POST['nstudents'];
	$sn_name=$_POST['sn_name'];
	$sn_id=$_POST['sn_id'];
	$t_name="ids".rand(1,10000);
	echo "string";

}



?>