<?php
	$Title = "The Plantage, Inc. &#151; Name That Picture!";
	
#	require ("../config.php");
	require ("../include/constants.php");
	require ("../include/site_wide_variables.php");
	include ("../include/header.html");
	require ("../include/flag.html");
	
	#  Declare our database variables.
	$db = mysql_connect ("localhost","plantage","63AwuEw");
	mysql_select_db ("plantage",$db);
?>

<table border="0" cellpadding="0" cellspacing="0" width="880">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="730" align="left" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="550">
				<tr>
					<td align="left" valign="top">
<?php
	$picID = $HTTP_POST_VARS["id"];
	$name = $HTTP_POST_VARS["name"];
	
	$db = mysql_connect ("localhost","plantage","63AwuEw");
	mysql_select_db ("plantage",$db);
	$SQL = mysql_query ("UPDATE new_pics SET name = '$name' WHERE picID = $picID");
	mysql_close($db);
	
	print "<h4>Update Succeeded!</h4>\n";
	print "<p><a href=\"index.php\">Rename another picture</a>&nbsp;|&nbsp;<a href=\"http://www.plantage.com/\">Home</a></p>\n";
?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>

</html>
