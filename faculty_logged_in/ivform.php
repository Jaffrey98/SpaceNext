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

// echo (string)$id;
// $uname=(mysqli_query($con,"SELECT uname from reg_fac where sr_no=$id"));
// $desg=mysqli_query($con,"SELECT desg from reg_fac where sr_no=$id");
// $ins_name=mysqli_query($con,"SELECT ins_name from reg_fac where sr_no=$id");
// $address=mysqli_query($con,"SELECT address from reg_fac where sr_no=$id");

?>

<!DOCTYPE html>
<!-- saved from url=(0027)http://localhost/wordpress/ -->
<html lang="en-US" class="gr__localhost"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">

<title>SpaceNext</title>
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="stylesheet" type="text/css" href="ivform.css">
<link rel="alternate" type="application/rss+xml" title="SpaceNext » Feed" href="http://localhost/wordpress/feed/">
<link rel="alternate" type="application/rss+xml" title="SpaceNext » Comments Feed" href="http://localhost/wordpress/comments/feed/">
<link rel="stylesheet" id="bootstrap-css" href="./index_files/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" id="astrid-style-css" href="./index_files/style.css" type="text/css" media="all">
<style id="astrid-style-inline-css" type="text/css">
.site-header {position: fixed;}
.site-title a,.site-title a:hover { color:#ffffff}
.site-description { color:#BDBDBD}
.site-header,.site-header.header-scrolled { background-color:rgba(32,37,41,0.9)}
@media only screen and (max-width: 1024px) { .site-header.has-header,.site-header.has-video,.site-header.has-single,.site-header.has-shortcode { background-color:rgba(32,37,41,0.9)} }
body, .widget-area .widget, .widget-area .widget a { color:#656D6D}
.footer-widgets, .site-footer, .footer-info { background-color:#202529}
body {font-family: 'Open Sans', sans-serif;}
h1, h2, h3, h4, h5, h6, .fact .fact-number, .fact .fact-name, .site-title {font-family: 'Josefin Sans', sans-serif;}
.site-title { font-size:36px; }
.site-description { font-size:14px; }
h1 { font-size:36px; }
h2 { font-size:30px; }
h3 { font-size:24px; }
h4 { font-size:16px; }
h5 { font-size:14px; }
h6 { font-size:12px; }
body { font-size:14px; }

</style>
<link rel="stylesheet" id="astrid-body-fonts-css" href="./index_files/css" type="text/css" media="all">
<link rel="stylesheet" id="astrid-headings-fonts-css" href="./index_files/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="./index_files/font-awesome.min.css" type="text/css" media="all">
<script type="text/javascript" src="./index_files/jquery.js.download"></script>
<script type="text/javascript" src="./index_files/jquery-migrate.min.js.download"></script>
<link rel="https://api.w.org/" href="http://localhost/wordpress/wp-json/">
<link rel="stylesheet" type="text/css" href="fac_login.css">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/wordpress/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/wordpress/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.8.1">
<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.modifytable{
	margin-left: 230px;
	width: 410px;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}

.titlec{
	font-size: 35px;
	margin-top: 40px;
	margin-left: 25px;
	font-style: oblique;
}

.contentc{
	font-size: 35px;
	margin-left: 50px;
	margin-right: 50px;
	text-align: justify;
    text-justify: inter-word;
}

</style></head>

<body class="home blog hfeed" style="" data-gr-c-s-loaded="true" cz-shortcut-listen="true">

<div class="preloader preloader-hidden" style="display: none;">
<div class="preloader-inner">
	<ul><li></li><li></li><li></li><li></li><li></li><li></li></ul>
</div>
</div>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="http://localhost/wordpress/#content">Skip to content</a> -->

	<header id="masthead" class="site-header has-header" role="banner">
		<div class="container">
			<div class="site-branding col-md-4 col-sm-6 col-xs-12">
				<h1 class="site-title"><a href="#" rel="home">SpaceNext</a></h1><p class="site-description"></p>			</div>
			<div class="btn-menu col-md-8 col-sm-6 col-xs-12"><i class="fa"></i></div>
			<nav id="mainnav" class="main-navigation col-md-8 col-sm-6 col-xs-12" role="navigation">
				<div id="primary-menu" class="menu"><ul>
<li class="page_item page-item-2"><a href="index.html">Home</a></li>
<li class="page_item page-item-21"><a href="#">Industrial Visit</a></li>
<li class="page_item page-item-23"><a href="quiz.html">Quiz</a></li>
<li class="page_item page-item-25"><a href="kcenter.html">Knowledge Centre</a></li>
<li class="page_item page-item-27"><a href="../index.html">Logout</a></li>
</ul></div>
			</nav>
		</div>
	</header>
			<div class="header-image">


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<nav id="footernav" class="footer-navigation" role="navigation">
					<div id="footer-menu" class="menu"><ul>
			<li class="page_item page-item-2"><a href="index.html"></a></li>
			<li class="page_item page-item-21"><a href="ivform.html"></a></li>
			<li class="page_item page-item-23"><a href="#"></a></li>
			<li class="page_item page-item-25"><a href="#"></a></li>
			<li class="page_item page-item-27"><a href="../index.html"></a></li>
			</ul></div>
				</nav>
		</footer>

		</div>
</div>


<script type="text/javascript" src="./index_files/main.js.download"></script>
<script type="text/javascript" src="./index_files/scripts.min.js.download"></script>

<script type="text/javascript" src="./index_files/wp-embed.min.js.download"></script>
<div>
<div class="col-md-2"></div>
<div class="col-md-8">


	<p class="title titlec">
		Instructions
	</p> 
	<p class="contentc" >
		<ol>
			<li>The Applicant is expected to fill all the mandatory fields mentioned in the application form.</li>
			<li>SpaceNext awards scholarships in the form of discounts in the IV fees to the student who deliver exceptional performance in the SpaceNext quizzes.</li>
			<li>The Faculty must confirm whether any of the student members who have won such scholarships are also a part of the IV team.</li>
			<li>If so then the IV Fees displayed to the Faculty will be inclusive of these discounts.</li>
			<li>Student username is the username issued to the Student by the SpaceNext Website after registration.</li>
			<li>The Faculty is 	requested to confirm the username from the students before.</li>
			<li>For students who are not officially registered on the website only student name is expected to be provided. </li>
		</ol>
	</p>
	<center>
		
	<a class="button header-button book_button" href="#apply">Apply</a>
	</center>



	<form class="form" action="ivform_sub.php" method="post" id="apply" style="margin-top: 250px; margin-bottom: 100px; ">
		<div class="row fields">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Faculty Name:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="fname" id="fnameid" class="inputc" required readonly>
			</div>
		</div>
		<!-- <div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Designation:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="desg" id="desgid" class="inputc" required readonly>
			</div>
		</div> -->
		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Institute Name:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="insname" id="insnameid" class="inputc" required readonly>
			</div>
		</div>
		<!-- <div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Address:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="address" id="addressid" class="inputc" required readonly>
			</div>
		</div> -->

            		<script>
                    document.getElementById('fnameid').value="<?php echo $fac_det['uname']?>";
                    document.getElementById('insnameid').value="<?php echo $fac_det['ins_name']?>";
            		</script>

                    <div class="row fields">
                        <div class="col-md-3"></div>
                            <div class="col-md-2">
                                <label >Date:</label>
                            </div>
                            <div class="col-md-5 ">
                                <input type="text" name="date" class="inputc" required placeholder="dd/mm/yyyy" style="color: black">
                            </div>
                    </div>


		<div class="row fields">
			<div class="col-md-3"></div>
				<div class="col-md-2">
					<label >No. of Students:</label>
				</div>
				<div class="col-md-5 ">
					<input type="number" name="nstudents" class="inputc" required style="color: black">
				</div>
		</div>

		<br>
		<div class="row fields">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<p>
				  <input type="button" value="Add Student" onClick="addRow('dataTable')" style="margin-left: 40px" />
				  <!-- <input type="button" value="Remove Student(s)" onClick="deleteRow('dataTable')" />  -->
				  <!-- <p>(All acions apply only to entries with check marked check boxes only.)</p> -->
				</p>
			</div>
			<div class="col-md-1"></div>
		</div>


		<table id="dataTable" class="formtable modifytable">
			 <tbody>
				  <tr>
					<p>
						<!-- <td>
						<input type="checkbox" name="chk[]" checked="checked" class="checkboxc" />
						</td> -->
						<td>
							<input type="text" name="sn_name[]" placeholder="Student name" required>
						</td>
						<td>
							<input type="text" class="small"  name="sn_id[]" placeholder="SpaceNext Username">
						</td>
					</p>
				  </tr>

			 </tbody>
		</table>

			<div class="col-md-5"></div>
			<input type="submit" value="Submit" name="submit" />
			<!-- Send the details to iv table -->


</div>



	</form>

</div>
<div class="col-md-2"></div>


</div>


<script type="text/javascript">

function addRow(tableID) {
	var x = document.getElementsByName("nstudents")[0].value;
	var nos = Number(x);

	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < nos){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);

			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum no. of students "+ nos +" reached");

	}
}

// function deleteRow(tableID) {
// 	var table = document.getElementById(tableID);
// 	var rowCount = table.rows.length;
// 	for(var i=0; i<rowCount; i++) {
// 		// console.log("for");
// 		var row = table.rows[i];
// 		var chkbox = row.cells[0].childNodes[0];
// 		console.log(row);
// 		if(null != chkbox && true == chkbox.checked) {
// 			console.log("in");
// 			if(rowCount <= 1) {               // limit the user from removing all the fields
// 				alert("Cannot Remove all the Passenger.");
// 				break;
// 			}
// 			table.deleteRow(i);
// 			rowCount--;
// 			i--;
// 		}
// 	}
// }

</script>




</body>
</html>



<?php
if (isset($_POST['submit'])) {
	//echo "Signed Up Bitchessssss!!!";

	// create_iv($con);
}

//date("Y/m/d")
