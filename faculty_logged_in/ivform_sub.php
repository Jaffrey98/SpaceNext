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
// echo"dec done"."<br>";
$sn_name=$_POST['sn_name'];
$sn_id=$_POST['sn_id'];
$sn_ns=$_POST['nstudents'];
$date=$_POST['date'];

// echo "var myval = foo(' . $date . ');";

$sr_no=$fac_det['sr_no'];
$dcost=350;
$dstatus=0;
// echo"dec 1"."<br>";

$ctable_sql="CREATE TABLE `$date` ( id INT NOT NULL AUTO_INCREMENT , fac_sr_no INT NOT NULL , st_name VARCHAR(25) NOT NULL , st_uname VARCHAR(25) DEFAULT NULL, cost INT DEFAULT $dcost,status TINYINT NOT NULL DEFAULT $dstatus, PRIMARY KEY (id))";
$ctable_exec=mysqli_query($con,$ctable_sql);

$i=0;
// echo $sn_ns.'<br>';
// echo $sn_name[$i].'<br>';

$ns_sch=0;

while($i<$sn_ns) {
    if($sn_id[$i]!=''){
        $ns_sch++;
        $ins_sql="INSERT INTO `$date` (fac_sr_no,st_name,st_uname,cost) VALUES ($sr_no,'$sn_name[$i]','$sn_id[$i]',0)";
    }
    else
        $ins_sql="INSERT INTO `$date` (fac_sr_no,st_name,st_uname) VALUES ($sr_no,'$sn_name[$i]','$sn_id[$i]')";
    $ins_stud_details=(mysqli_query($con,$ins_sql));
    // var_dump($ins_stud_details);
    $i++;
}

$sum_sql_res= mysqli_query($con,"SELECT SUM(cost) AS value_sum FROM `$date`");
$row = mysqli_fetch_assoc($sum_sql_res);
$sum = $row['value_sum'];
// echo gettype($sum);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CONFIRM PAGE</title>
    </head>
    <body bgcolor="#242D33">
        <style>
        .amount {
            color: rgb(255, 255, 255);
            font-size: 45px;
            text-shadow: 2px 2px grey;
        }
        p{
            color: rgb(86, 143, 210)
        }
        .b{
            border: 1px solid #000000;
            padding: 10px;
            background-color:rgb(240, 242, 244);
            color: #000000;
        }
        .conf:hover{
            border: 1px solid #21E067;
            color: #21E067;
        }
        .canc:hover{
            border: 1px solid #FF3600;
            color: #FF3600;
        }
        </style>
        <br>
        <br>
        <br>
        <br>
        <center>
            <p style="font-size:25px;font-family:Lucida Sans Unicode">Estimate(tentative) gross total for Industrial Visit <br>  <span style="text-decoration:underline">[ Fees wavied for <?php echo $ns_sch; ?> student(s) ]</span><br>&#8681;<br> <span class="amount">Rs <?php echo $sum; ?></span></p>
            <br>
            <p id="redirect0" style="font-size:20px;font-family:Lucida Sans Unicode"></p>
            <p id="redirect1" style="font-size:20px;font-family:Lucida Sans Unicode"></p>
            <br>
            <p id="res"></p>
            <button id="con" class="b conf" style="font-size:20px;font-family:Lucida Sans Unicode   ">CONFIRM</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <button id="can" class="b canc" style="font-size:20px;font-family:Lucida Sans Unicode">CANCEL</button>
        </center>
        <script type="text/javascript" src="../index_files/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
                function conf_func() {
                  document.getElementById("redirect0").innerHTML ="FORM SUBMISSION SUCCESSFULL !!!";
                  document.getElementById("redirect1").innerHTML ="You will be redirected to the industrial visit page shortly";
                  setTimeout(function redirect() {
                  window.location.replace("industrial_visit.html");
                },2500);
            }
                function canc_func() {
                //   $('#res').load('del_table.php');
                // var myval = foo("this is a php variable");
                // alert(myval);
                var myval = "<?php echo $date ?>";
                $.ajax({
                  type: 'POST',
                  url: 'del_table.php',
                  data: {'variable': myval},
                });
                  document.getElementById("redirect0").innerHTML ="FORM SUBMISSION CANCELED !!!";
                  document.getElementById("redirect1").innerHTML ="You will be redirected to your home page shortly";
                  setTimeout(function redirect() {
                  window.location.replace("index.html");
                },2500);
            }
            document.getElementById("con").addEventListener("click", conf_func);
            document.getElementById("can").addEventListener("click", canc_func);
        </script>
    </body>
</html>
