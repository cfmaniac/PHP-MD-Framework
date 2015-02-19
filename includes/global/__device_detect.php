<?php
     //This File will tell us what type of Device We Are using and there fore load the proper functions neccessary
	   
     //declare that $deviceDetect is going to be a global variable, for use elsewhere on the page//
global $deviceDetect;
	//create a variable called deviceDetect, and set it to zero//
$deviceDetect=0; 
 
	//start detecting various devices//
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad"); 
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$blackberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");	
$mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
 
    //set devicetype for phones//
if ($mobile && $android || $iphone || $ipod || $blackberry)  {
	$deviceDetect=1;
	}
 
	//set devicetype for tablets//	
if ($ipad || !$mobile && $android)  {
	$deviceDetect=2;
	}
 
	//devices are detected, now create outcomes - THIS CODE CAN BE REUSED ON THE PAGE//
if ($deviceDetect==0)
	{
	//whatever you want to happen to desktop browsers// 
	include('./includes/web/app.php');
	/*include('./includes/web/styles.css');*/
	echo "<link href='./includes/web/styles.css' rel='stylesheet'>";
	}
if ($deviceDetect==1)
	{
	//whatever you want to happen to mobile phones// 
    include('./includes/mobile/app.php');
	/*include('./includes/web/styles.css');*/
	echo "<link href='./includes/mobile/styles.css' rel='stylesheet'>";        
	}
if ($deviceDetect==2)
	{
	//whatever you want to happen to iPad & Android Tablet// 
    include('./includes/tablet/app.php');
	/*include('./includes/web/styles.css');*/
	echo "<link href='./includes/tablet/styles.css' rel='stylesheet'>";        
	}
?>