<?php
	$Title = "The Plantage, Inc. &#151; Name That Picture!";
	
#	require ("../config.php");
#	require ("../include/constants.php");
#	require ("../include/site_wide_variables.php");
	include ("../include/header.html");
	require ("../include/flag.html");
	
	#  Declare our database variables.
	$db = mysql_connect ("localhost","plantage","63AwuEw");
	mysql_select_db ("plantage",$db);
?>

<table border="0" cellpadding="0" cellspacing="0" width="880">
	<tr>
		<?php
			include ("../include/leftnav.html");
		?>
		<td width="20">&nbsp;</td>
		<td width="730" align="left" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="550">
				<tr>
					<td align="left" valign="top">
<?php
	$imgDir = "img";
	$picID = $HTTP_GET_VARS["id"];	// Lets this and the subsequent form
								// know which plant we're dealing with

	$SQL = mysql_query ("SELECT * FROM new_pics WHERE picID = $picID");
	$result = mysql_fetch_array($SQL);
	$imgURL = $result["imgURL"];
	$name = $result["name"];			// We'll use this as the default
								// input value

	echo "<form action=\"result.php\" method=\"post\">\n";
	print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"10\" width=\"100%\">\n";
	print "\t<tr valign=\"top\">\n";
	echo "\t\t<td align=\"center\">\n";
	print "\t\t\t<p><img src=\"$imgDir/$imgURL\" width=\"200\" height=\"150\" border=\"0\" /></p>\n";
	print "\t\t\t<input type=\"text\" name=\"name\" size=\"25\" value=\"$name\" />\n\t\t<td>\n";
	print "\t</tr>\n<tr>\n";
	print "</table>\n";

	// This next value tells the database which record to update:
	print "<input type=\"hidden\" name=\"id\" value=\"$picID\" />\n";

	print "<div align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Submit\" />&nbsp;<input type=\"reset\" name=\"reset\" value=\"Reset\" /></div>\n";
	print "</form>\n";
?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>

</html>
