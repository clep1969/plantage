<?php
	session_start();
    @include ("../catalog/include/constants.php");
//	@include ("../include/constants.php");
//	session_start();
//	unset($_SESSION["uname"]);
/*
	if (!isset($_SESSION["uname"]))	{
		@ include ("login.php");
	}	else	{
*/
	@ include ("../include/header.inc.php");
//	@ include ("../include/constants.php");

	echo "\t<div id=\"body\">\n";
	include ("admin.php");
	echo "\t</div>\n";
	include ("../include/footer.inc.php");
	echo "</body>\n\n";
	echo "</html>";
//	}
?>