<?php
	// New stuff -- different from live site.
	if (isset($mode) == "SS")	{
		$Title = "The Plantage, Inc. &#151; Sunny Startups&#153;";
	}	else	{
		$Title = "The Plantage, Inc. &#151; Spring " . date("Y") . " Catalogue";
	}
	
	require ("include/constants.php");
	require ("../lib/mysql_db.class.php");
	require ("include/header.html");
	require ("include/flag.html");
//	require ("../include/header.inc.php");

	$theCatalog = new MySQL_DB;
	$theCatalog->init(HOST,USER,PASS,"plantage_plantage");
	$theCatalog->connect();
?>
<table border="0" cellpadding="0" cellspacing="0" width="800">
    <tr>
        <?php @include ("include/leftnav.html"); ?>
        <td width="20">&nbsp;</td>
        <td width="730" align="left" valign="top">
		<!--div id="body"-->
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
			         <?php require ("include/footer.php"); ?>
			     <tr>
			         <td height="10" colspan="3">&nbsp;</td>
				</tr>
			</table>
        </td>
    </tr>
</table>
		<!--/div-->
<?php
//	include ("../include/footer.inc.php");
?>

</body>

</html>