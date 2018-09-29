<?php
	echo "<p>".$_SERVER["PHP_SELF"]."</p>\n";
	$dir = explode("/",$_SERVER["PHP_SELF"]);
	echo $dir[2];
?>
