<?php
//Application Variables:
$app_name = "HostConcepts, LLC Framework";
$app_version = "2.5.0";


if($_GET['device']){
	$device = $_GET['device'];
}else{
	$device = "0";
}

include('_device_detect.php');
//Database Variables:
/*mysql_connect("localhost", "hostconc_jh", "jhar808_13") or die(mysql_error());
//echo "Connected to MySQL Successfully.<br />";
mysql_select_db("hostconc_sandbox") or die(mysql_error());*/
?>