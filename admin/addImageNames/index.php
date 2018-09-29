<?php
	$Title = "The Plantage, Inc. &#151; Name That Picture!";
	
#	require ("../config.php");
#	require ("../include/constants.php");
#	require ("../include/site_wide_variables.php");
	include ("../include/header.html");
	require ("../include/flag.html");
	
	#  Declare our database variables.
	$db = mysql_connect ("localhost","plantage","63AwuEw");
	
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
	$img_dir = "img/";
	
	mysql_select_db ("plantage",$db);
	$SQL = mysql_query ("SELECT * FROM new_pics");
	$result = mysql_fetch_object($SQL);
	if (mysql_num_rows($SQL) > 0)	{
		print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"10\" width=\"100%\">\n";
		print "\t<tr valign=\"top\">\n";
		$i = 1;
		do	{
			echo "\t\t<td align=\"center\">\n\t\t\t<p><img src=\"" . $img_dir . $result->imgURL . "\" width=\"200\" height=\"150\" border=\"0\" /></p>\n\t\t\t<p align=\"center\"><a href=\"rename.php?id=" . $result->picID . "\">" . $result->name . "</a></p>\n\t\t</td>\n";
			if (!($i % 2))	{
				print "\t</tr>\n<tr>\n";
			}
			$i++;
		}	while ($result = mysql_fetch_object($SQL));
		if (!($i % 2))	{
			print "\t\t<td align=\"center\">&nbsp;</td>\n";
			print "\t</tr>\n";
		}
		print "</table>\n";
	}
?>					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php
	mysql_close($db);
?>

</body>

</html>
