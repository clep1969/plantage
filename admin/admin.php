<?php
	/***
	*	ADMIN.PHP
	*	The central organizing script for the admin suite.
	*	Provides the basic framework for all sub-scripts.
	*	
	*	STATUS: SOLID AS OF 5/8/03
	***/

	include ("include/variables.php");
	include ("../lib/tables.class.php");
	include ("include/AdminFunctions.php");

	
	//	Connect to the database.
	$db = mysql_connect ("localhost","plantage","63AwuEw") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".");
	mysql_select_db ("plantage",$db) or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".");

	/*	What do we want to do with the admin area?

		1. Add plant genuses to the catalogue.
		2. Edit existing plant genuses in the catalogue.
		3. Delete existing plant genuses in the catalogue.
		4. Add plant varietals to the catalogue.
		5. Edit existing plant genuses in the catalogue.
		6. Delete existing plant genuses in the catalogue.
		7. Add headlines to the "headlines" section.
		8. Edit existing headlines in the "headlines" section.
		9. Delete headlines from the "headlines" section.
		10. Add images for the catalogue.
		11. Use gd to make low-source versions of larger images.
		12. Delete images from the catalogue.
		13. Add 'unprivileged' users to the site.
		14. Edit 'unprivileged' user account info.
		15. Delete 'unprivileged' users.
		16. Add administrators ('privileged' users) to the site.
		17. Edit administrator account info.
		18. Delete administrator accounts.

		On top of all of this, we want the admin section to be password-
		protected, so we'll need an authentication module that must be 
		completed before the user even sees the admin screen.
	*/
?>
<table border="0" cellpadding="0" cellspacing="0" width="99%">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" valign="bottom">
<?php include ("include/tabs.php"); ?>
		</td>
		</td width="20">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top" width="20" height="20"><img src="images/table_ul.gif" width="20" height="20" border="0" /></td>
		<td bgcolor="#cccc99">&nbsp;</td>
		<td align="right" valign="top" width="20" height="20"><img src="images/table_ur.gif" width="20" height="20" border="0" /></td>
	</tr>
	<tr>
		<td width="20" bgcolor="#cccc99">&nbsp;</td>
		<td align="center" valign="top" bgcolor="#cccc99">
<?php
	/*
		Right off the bat, we can organize the file according to 
		categories, subcategories and edit modes, like so:
	*/
	switch ($category)	{
		case "catalogue":
			include ("catalogue.php");
			break;
		case "images":
			include ("images.php");
			break;
		case "headlines":
			include ("headlines.php");
			break;
		case "accounts":
			include ("accounts.php");
			break;
		default:
			include ("default.php");
			break;
	}
?>
		</td>
		<td width="20" bgcolor="#cccc99">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="bottom" width="20" height="20"><img src="images/table_ll.gif" width="20" height="20" border="0" /></td>
		<td bgcolor="#cccc99">&nbsp;</td>
		<td align="right" valign="bottom" width="20" height="20"><img src="images/table_lr.gif" width="20" height="20" border="0" /></td>
	</tr>
</table>