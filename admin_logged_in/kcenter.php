<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
// include 'library/config.php';
// include 'library/opendb.php';

$query = "INSERT INTO upload (name, type, content ) VALUES ('$fileName', '$fileType', '$content')";

mysqli_query($con,$query) or die('Error, query failed'); 
// include 'library/closedb.php';

echo '<script type="text/javascript">
								window.location.replace("kcenter.html");
				         		alert("File uploaded successfully");
				      </script>';
} 

?>

