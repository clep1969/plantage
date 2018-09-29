<?php
	//	Variables.php
	//	Central repository for all variables needed in edit suite.

	if (ereg("variables.php",$_SERVER["PHP_SELF"]))	{
		header ("Location:../admin.php");
	}

	/*	-- Page Variables. --	*/
	$bg_color = "#ffffcc";
	$fg_color = "#cccc99";
	
	/*	-- $SERVER Variables --	*/
	$self = $_SERVER["PHP_SELF"];

	/*	-- $GET Variables --		*/
	//	Common to all scripts.
	$category = $_GET["c"];
	$subcategory = $_GET["s"];
	$editMode = $_GET["mode"];
	$id = $_GET["id"];

	/*	-- $POST Variables --	*/
	//	GENUS
	//	Common to all scripts.
	$catID = $_POST["catID"];
	$genus = $_POST["plantGenus"];
	$genID = $_POST["genusID"];
	$submit = $_POST["submit"];
	//	Used in add_ and edit_genus.php
	$name = $_POST["commonName"];
	$code = $_POST["code"];
	$zone = $_POST["zone"];
	$desc = $_POST["genDesc"];
	//	Used in add_, edit_ and delete_varietal.php
	$plantID = $_POST["plantID"];
	$varietal = $_POST["varietalName"];
	$cultivar = $_POST["cultivar"];
	$vDesc = $_POST["description"];
	$potID = $_POST["potID"];
	$priceID = $_POST["priceID"];
	//	Used in headlines.php
	$headline = $_POST["headline"];
	$body = $_POST["body"];
	//	Used in accounts.php
	$uID		= $_POST["user_id"];
	$realName = $_POST["realname"];
	$uname	= $_POST["uname"];
	$pass		= $_POST["pass1"];
	$confirm	= $_POST["pass2"];
	$email	= $_POST["email"];
	$add1		= $_POST["add1"];
	$add2		= $_POST["add2"];
	$city		= $_POST["city"];
	$state	= $_POST["state"];
	$zip		= $_POST["zip"];
	$tin		= $_POST["tid"];
	$authLevel= $_POST["rights"];
?>