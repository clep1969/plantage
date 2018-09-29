<?php
	// New stuff -- different from live site.
	if (!isset($mode) == "SS")	{
		$Title = "The Plantage, Inc. &#151; Sunny Startups&#153;";
	}	else	{
		$Title = "The Plantage, Inc. &#151; Spring " . date("Y") . " Catalogue";
	}
	
	require ("include/constants.php");
	require ("../lib/mysql_db.class.php");
	require ("../include/header.inc.php");

	$theCatalog = new MySQL_DB;
	$theCatalog->init(HOST,USER,PASS,"plantage");
	$theCatalog->connect();
?>
		<div id="body">
			<table border="0" cellpadding="0" cellspacing="0">
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
				</tr>
			</table>
		</div>
<?php
	include ("../include/footer.inc.php");
?>

</body>

</html>