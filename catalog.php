<?php
	require ("include/constants.php");
	require ("../include/site_wide_variables.php");
	
	#  Declare our database variables.
	$db = mysql_connect (HOST, USER, PASS);
	
	if (isset($mode) == "SS")	{
		$Title = "The Plantage, Inc. &#151; Sunny Startups&#153;";
	}	else	{
		$Title = "The Plantage, Inc. &#151; Spring " . date("Y") . " Catalogue";
	}
	
	include ("include/header.html");
	require ("include/flag.html");
?>
<table border="0" cellpadding="0" cellspacing="0" width="880">
	<tr>
		<?php
			include ("include/leftnav.html");
		?>
		<td width="20">&nbsp;</td>
		<td width="730" align="left" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="550">
				<tr>
					<?php
						if (isset($mode))	{
							include ("include/tabs_ss.php");
							echo "</tr>\n";
							require ("startups.php");
						}	else	{
							include ("include/tabs.php");
							echo "</tr>\n";
							require ("master.php");
						}
					?>
				<tr>
					<td height="10" colspan="3">&nbsp;</td>
				</tr>
					<?php
						require ("include/footer.php");
					?>
				<tr>
					<td height="10" colspan="3">&nbsp;</td>
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