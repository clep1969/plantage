<?php # Main database work starts here ?>
				<tr>
					<td height="20" width="20" align="right" valign="top"><img src="images/table_tl.gif" border="0" alt=""></td>
					<td width="505" height="20" bgcolor="#CCCC99">&nbsp;</td>
					<td height="20" width="20" align="left" valign="top"><img src="images/table_tr.gif" border="0" alt=""></td>
				</tr><?php # End Padding Row. ?>
				<tr><?php # Content Row.?>
					<td width="20" height="250" align="right" bgcolor="#CCCC99">&nbsp;</td>
					<td align="left" valign="top" bgcolor="#CCCC99">
<?php

#	This page will control all the searches on The Plantage's catalog page.
#	The default action will be to display the five plant categories.
#	If a category is selected, we will then check to see if a genus
#	selection has been made. If no genus selection has been made, then we
#	display a list of available genus in the category. If genus selection
#	has been made, then we display the varietals and other information for
#	the selected genus.

#  Check for category selection. Default action lists categories.

if ((!isset($catID)) && (!isset($genID)))	{
	$theCatalog->query ("SELECT * FROM PLANT_CAT");
	require ("introText.php");
	while ($row = mysql_fetch_array ($theCatalog->Query))	{
		echo "<p><a href=\"" . $page . "?catID=" . $row["catID"] . "\">" . $row["plantCategory"] . "</a></p>\n";
#		$theCatalog->next_record();
	}

#  If category selection exists, check for genus selection.
#  If no genus selection, list genus for chosen category.

}	elseif (!isset($genID))	{
	$theCatalog->query ("SELECT * FROM PLANT_GEN WHERE catID = $catID ORDER BY plantGenus");
	if (mysql_num_rows ($theCatalog->Query) > 0)	{
		print "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" width=\"518\">\n";
		print "<tr>\n";
		$i = 1;
		while ($row = mysql_fetch_array ($theCatalog->Query))	{
			print "<td width=\"33%\" height=\"12\">\n";
			echo "<a href=\"".$page."?catID=".$row["catID"]."&genID=".$row["genusID"]."\">".$row["plantGenus"]."</a>\n";
			print "</td>\n";
			if (!($i % 3))	{
				print "</tr>\n<tr>\n";
			}
			$i++;
		}
		if (!($i % 3))	{
			print "<td width=\"170\">&nbsp;</td>\n";
			print "</tr>";
		}
		$theCatalog->next_record();
		print "</table>\n";
	}

#  If genus selection exists, list information for that genus.

}	else	{
	$theCatalog->query("SELECT * FROM PLANT_CAT AS ca, PLANT_CODES AS co, PLANT_GEN AS g, PLANT_PLANTS AS pl, PLANT_POTS AS po, PLANT_ZONE AS z WHERE ca.catID = g.catID AND ca.catID = $catID AND g.genusID = pl.genusID AND g.genusID = $genID AND pl.potID = po.potID AND co.codeID = g.codeID AND z.zoneID = g.zoneID");
	$row = mysql_fetch_array ($theCatalog->Query);
//	echo "<h1>".$row["plantCategory"]."</h1>\n";
	print "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" width=\"518\">\n";
	print "<tr>\n";
	for ($i = 0; $i <3; $i++)	{
		print "<td></td>\n";
	}
?>
	</tr>
	<tr>
		<td align="left" valign="top">
			<h2><?= $row["plantGenus"] ?></h2>
		</td>
		<td>&nbsp;</td>
		<td colspan="2" align="right" valign="top">
			<h2><i><?= $row["commonName"] ?></i></h2>
		</td>
	</tr>
	<tr>
	<?= "<td colspan=\"4\" align=\"center\"><h4><img src=\"images/codes/" . $row["codeNum"] . ".gif\" />&nbsp;&nbsp;" . $row["zone"] . "</h4><hr /></td>\n" ?>
	</tr>
	<tr>
		<td colspan="4" align="left" valign="top">
			<p><i><?= $row["genDesc"] ?></i></p>
		</td>
	</tr>
<?php
	do	{
		if ($row["isNew"] == "\n")	{
			$isNew = "";
		}	else	{
			$isNew = $row["isNew"]."&nbsp;";
		}
		if ($row["varietalName"] == "\n")	{
			$varietal = "";
			$cultivar = "&#145;" . $row["cultivar"] . "&#146;";
		}	else	{
			if ($row["cultivar"] != "\n")	{
				$cultivar = "&#145;" . $row["cultivar"] . "&#146;";
				$varietal = $row["varietalName"] . "&nbsp;";
			}	else	{
				$cultivar = "";
				$varietal = $row["varietalName"];
			}
		}

		print "<tr>\n<td colspan=3 align=left valign=top>\n<p>";
		if (($genID == "081") || ($genID == "198"))	{
			echo $row["code"];
		}
		echo "<p><span class=\"cultivar\"><span class=\"isNew\">".$isNew."</span><span class=\"varietal\">".$varietal."</span>".$cultivar.":</span> ".$row["description"]."</p>\n";
		echo "<p align=\"center\"><b>".$row["potSize"]."</b></p>\n";
		echo "</td>\n<td align=\"right\">\n";
		echo "<a href=\"javascript: OpenDetail ('detail.php?catID=".$row["catID"]."&genID=".$row["genusID"]."&plant=".$row["plantID"]."');\">".$row["lrURL"]."</a>\n";
		print "</td>\n</tr>\n";
	}	while ($row = mysql_fetch_array ($theCatalog->Query));
	print "</table>";
}

?>
					</td>
					<td align="left" bgcolor="#CCCC99" height="250" width="20">&nbsp;</td>
				</tr>
				<tr>
					<td height="20" width="20" align="right" valign="bottom"><img src="images/table_ll.gif" border="0" alt=""></td>
					<td width="510" height="20" bgcolor="#CCCC99">&nbsp;</td>
					<td height="20" width="20" align="left" valign="bottom"><img src="images/table_lr.gif" border="0" alt=""></td>
				</tr>
