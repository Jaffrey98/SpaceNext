<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

function signup($con)
{
	// echo "hello signup"."<br>";
	if (!empty($_POST['uname'])) {
		// echo "inside first if"."<br>";
		$query = mysqli_query($con, "SELECT * FROM reg_stud WHERE uname = '$_POST[uname]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));

		if (!$row = mysqli_fetch_array($query)) {
			// echo '<script type="text/javascript">
		    //      	alert("hello");
		    //   </script>';
			// echo "inside second if"."<br>";
			NewUser($con);
		}
		else{
			// $query = mysqli_query($con, "SELECT * FROM reg_stud WHERE uname = '$_POST[uname]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));
			echo '<script type="text/javascript">
		         	alert("User already exists!!");
		      </script>';
			// echo "inside second if"."<br>";
			// NewUser($con);
		}
		// else{
		// 	// echo '<script type="text/javascript">
		//     //      	alert("hello");
		//     //   </script>';
		// 	// echo "<p style='color:#F5F9F8;font-family:Verdana;'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Already Registered!</p>";
		// }
	}
}


function NewUser($con) {
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	// echo "before insert declartion"."<br>";
	$query = "INSERT INTO reg_stud (uname, email_id , pass ,sch_eligible) VALUES ('$uname','$email','$pass',0)";
	// echo "after insert declartion"."<br>";
	$data = mysqli_query($con, $query) or die(mysqli_error($con));
	// echo "after insert query fired"."<br>";
	if($data){
		echo "<p style='color:#F5F9F8;font-family:Verdana;'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Thank you for registering with us!</p>";
		echo '<script type="text/javascript">
	         	setTimeout(function redirect() {
					window.open("student_logged_in/index.html");},1500);
	      </script>';
	}
}

if (isset($_POST['submit'])) {
	// echo "entered isset func"."<br>";
	signup($con);
	// echo "Sign up complete";
	// header('Location:student_logged_in/index.html');
}
/*window.setTimeout(window.location.replace("student_logged_in/index.html"), 1000);*/
?>
