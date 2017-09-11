<?php
    // require 'connect.php';
    // include 'kcenter1.php';

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'spacenext');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

    $db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

   if(isset($_GET['id']))
    {

    // query the server for the file
    $id = $_GET['id'];
    $query = "SELECT * FROM upload WHERE id = '$id'";
    $result  = mysqli_query($con,$query) or die(mysql_error());
     if(mysqli_num_rows($result)==0){
        echo '<script type="text/javascript">
                                window.location.replace("kcenterhome.php");
                                alert("No file with this id exists");
                      </script>';
    }
    else
    {
    $data=mysqli_fetch_assoc($result);

    $name = $data["name"];
    $type = $data["type"];
    $content = $data["content"];

    // // define results into variables
    // $name=mysql_result($result,0,"name");
    // // $size=mysqli_result($result,0,"size");
    // $type=mysqli_result($result,0,"type");
    // $content=mysqli_result($result,0,"content");

    header("Content-disposition: attachment; filename=$name");
    // header("Content-length: $size");
    header("Content-type: $type");
    echo $content;

    mysqli_close();
    }
}
    else{
    die("No file ID given...");
    }
?>