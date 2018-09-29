<?php

	#####################################################################
	#                                                                   #
	#          SITE_WIDE_VARIABLES.PHP                                  #
	#___________________________________________________________________#
	#                                                                   #
	#          Contains all the variables used site-wide that           #
	#          are passed on the query string but do not get            #
	#          plugged into the scripts due to register_globals         #
	#          being turned off.                                        #
	#                                                                   #
	#####################################################################
	
	
	//     Replaces $PHP_SELF.

	$page = $_SERVER["PHP_SELF"];
	
	
	//     For the main site.
	if ($_GET)	{
		$content = $_GET["content"];
	}	else	{
		$content = $HTTP_GET_VARS["content"];
	}
	
	
	//     For the catalogues.
	if ($_GET)	{
		$mode = $_GET["mode"];
		$genID = $_GET["genID"];
		$catID = $_GET["catID"];
		$plant = $_GET["plant"];
	}	else	{
		$mode = $HTTP_GET_VARS["mode"];
		$genID = $HTTP_GET_VARS["genID"];
		$catID = $HTTP_GET_VARS["catID"];
		$plant = $HTTP_GET_VARS["plant"];
	}
	
?>