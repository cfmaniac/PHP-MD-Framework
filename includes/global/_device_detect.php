<?php
 
	//devices are detected, now create outcomes - THIS CODE CAN BE REUSED ON THE PAGE//
if ($device=="0")
	{
	//whatever you want to happen to desktop browsers// 
    include('./includes/web/app.php');
	/*include('./includes/web/styles.css');*/
	echo "<link href='./includes/web/styles/styles.css' rel='stylesheet'>";
	
	}
if ($device=="1")
	{
	//whatever you want to happen to mobile phones// 
    include('./includes/mobile/app.php');
	echo "<link href='./includes/mobile/styles/styles.css' rel='stylesheet'>";        
	}
if ($device=="2")
	{
	//whatever you want to happen to iPad & Android Tablet// 
    include('./includes/tablet/app.php');
	echo "<link href='./includes/tablet/styles/styles.css' rel='stylesheet'>";       
	}
?>