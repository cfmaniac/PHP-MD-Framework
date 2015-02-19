<?php
echo "<div id='app_container'>";

if ($edition == "Desktop Edition"){
$edition_text = "
<h1>How the Framework could be deployed (Web)</h1>
Current Running Edition of the Framework: <strong>$edition</strong>.<br><br>
This is a simplified example of how we could deploy a singular code-base to multiple devices, with varying capabilities.<br>
The $edition would load something similiar to a full-scale fully functional website. <br> This \"Edition\" is a quasi-run Desktop/Laptop Version.";
$other_devices = '<h2>Try these Devices:</h2>
<a href="?device=1">A Mobile Phone Device</a> | <a href="?device=2">A Tablet Device</a><br><br>
<small>Proof of Concept by James Harvey</small>';


} else if ($edition == "Tablet Edition"){
	
$edition_text = "
<h1>How the Framework could be deployed (Tablet)</h1>
Current Running Edition of the Framework: <strong>$edition</strong>.<br><br>
This is a simplified example of how we could deploy a singular code-base to multiple devices, with varying capabilities.<br>
The <strong>$edition</strong> would load the website with all the functions and neccessary interfaces needed to be run on a tablet-based device.<br> This \"Edition\" is a quasi-run Tablet Version.";
$other_devices = '<h2>Try these Devices:</h2>
<a href="?device=1">A Mobile Phone Device</a> | <a href="?device=0">A Desktop Device</a>
<br><br>
<small>Proof of Concept by James Harvey</small>';

} else if ($edition == "Mobile Phone Edition"){
	
$edition_text = "
<h1>How the Framework could be deployed (Mobile)</h1>
Current Running Edition of the Framework: <strong>$edition</strong>.<br><br>
This is a simplified example of how we could deploy a singular code-base to multiple devices, with varying capabilities.<br>
The <strong>$edition</strong> could offer a scaled-down mobile version of the website, or web-app.<br> This \"Edition\" is a quasi-run Mobile Version.";
$other_devices = '<h2>Try these Devices:</h2>
<a href="?device=0">A Desktop Device</a> | <a href="?device=2">A Tablet Device</a><br><br>
<small>Proof of Concept by James Harvey</small>';	
}




echo $edition_text ."<br><br>". $other_devices;
echo "</div>";
?>
