<?php # Main database work starts here ?>
				<tr>
					<td height="20" width="20" align="right" valign="top"><img src="images/SSTable_tl.gif" border="0" alt=""></td>
					<td width="505" height="20" bgcolor="#99CC99">&nbsp;</td>
					<td height="20" width="20" align="left" valign="top"><img src="images/SSTable_tr.gif" border="0" alt=""></td>
				</tr><?php # End Padding Row. ?>
				<tr><?php # Content Row.?>
					<td width="20" height="250" align="right" bgcolor="#99CC99">&nbsp;</td>
					<td align="left" valign="top" bgcolor="#99CC99">
<?php

#	This page will control all the searches on The Plantage's SS page.
#	The default action will be to display the four Sunny Startups categories.
#	If a category is selected, we will then check to see if a genus
#	selection has been made. If no genus selection has been made, then we
#	display a list of available genus in the category. If genus selection
#	has been made, then we display the varietals and other information for
#	the selected genus.

#  Check for category selection. Default action lists categories.

if ((!isset($catID)) && (!isset($genID)))	{
	$theCatalog->query ("SELECT * FROM SS_CAT");
	require ("introText.php");
	print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
	print "<tr>\n<td align=\"left\" valign=\"top\">\n";
	while ($row = mysql_fetch_array ($theCatalog->Query))	{
		echo "<p><a href=\"".$page."?mode=SS&catID=".$row["catID"]."\">".$row["SSCat"]."</a></p>\n";
	}
	print "</td>\n<td align=\"right\" valign=\"top\">\n<img src=\"images/SSLogo.gif\" />\n</td>\n";
	print "</tr>\n</table>\n";

#  If category selection exists, check for genus selection.
#  If no genus selection, list genus for chosen category.

}	elseif (!isset($genID))	{
		$theCatalog->query ("SELECT * FROM SS_GEN WHERE category = $catID");
		if (mysql_num_rows ($theCatalog->Query) > 0)	{
			print "<table border=0 cellpadding=5 cellspacing=0 width=518>\n";
			$i = 1;
			while ($row = mysql_fetch_array ($theCatalog->Query))	{
				print "<td width=\"33%\">\n";
				echo "<a href=\"catalog.php?mode=SS&catID=".$row["category"]."&genID=".$row["genID"]."\">".$row["plantGenus"]."</a>\n";				print "</td>\n";
				if (!($i % 3))	{
					print "</tr>\n<tr>\n";
				}
				$i++;
			}
			if (!($i % 3))	{
				print "<td width=170>&nbsp;</td>\n";
				print "</tr>";
			}
			print "</table>\n";
		}

#  If genus selection exists, list information for that genus.

}	else	{
		$theCatalog->query ("SELECT * FROM SS_CAT AS c, SS_GEN AS g, SS_PLANT AS p WHERE c.catID = g.category AND c.catID = $catID AND g.genID = p.genus_ID AND g.genID = $genID");
		$row = mysql_fetch_array ($theCatalog->Query);
		echo "<h1>".$row["SSCat"]."</h1>\n";
		print "<table border=0 cellpadding=5 cellspacing=0 width=\"100%\">\n";
		print "<tr>\n";
		echo "<td align=\"left\" valign=\"top\"><h2>".$row["plantGenus"]."</h2></td>\n";
		print "<td colspan=3>&nbsp;</td>";
		print "</tr>\n";
		print "<tr>\n<td colspan=4><hr></td>\n</td>\n";
		do	{
			print "<tr>\n<td colspan=3 align=left valign=top>\n";
			echo "<p class=\"varietal\"><b>".$row["varietal"].": </b>".$row["description"]."</p>\n";
			print "<td>\n";
			printf("<td align=center><a href=\"javascript: OpenDetail('detail.php?mode=SS&catID=%s&genID=%s&plant=%s');\">%s</a>", $row["catID"], $row["genID"], $row["plant_ID"], $row["lrURL"]);
			print "</td>\n</tr>\n";
		}	while ($row = mysql_fetch_array ($theCatalog->Query));
		print "</table>";
}

?>
					</td>
					<td align="left" bgcolor="#99CC99" height="250" width="20">&nbsp;</td>
				</tr><?php # End Content Row. ?>
				<tr><?php # Padding Row ?>
					<td height="20" width="20" align="right" valign="bottom"><img src="images/SSTable_ll.gif" border="0" alt=""></td>
					<td width="510" height="20" bgcolor="#99CC99">&nbsp;</td>
					<td height="20" width="20" align="left" valign="bottom"><img src="images/SSTable_lr.gif" border="0" alt=""></td>
				</tr><?php # End Padding Row. ?>
<?php # End main database work area. ?>
