<?php
	/*
	include ("include/variables.php");
	include ("../lib/tables.class.php");
	include ("AdminFunctions.php");
	*/

	#	edit_catalogue.php
	#	To be folded in to admin.php when it is perfected.
	#	Or not.
	#	switch ($category)	{
	#		case "catalogue":
				switch ($subcategory) {
					case "genus":
						switch ($editMode) {
							case "add":
								print "<p>$category&gt;$subcategory&gt;$editMode</p>\n<br />\n";
								if (!$submit) {
?>
		<form action="<?= $self; ?>?c=catalogue&s=genus&mode=add" method="post">
			<table border="0" cellpadding="5" cellspacing="0">
				<tr>
					<td width="25" rowspan="9">&nbsp;</td>
					<td colspan="2">
						<select name="catID">
							<option selected>Choose A Category ...</option>
<?php
									//	Generate the drop-down menu for $catID
									generateDropDownMenu("SELECT * FROM PLANT_CAT");
?>
						</select>
					</td>
					<td width="25" rowspan="9">&nbsp;</td>
				</tr>
				<tr>
					<td width="35" align="right">Plant Genus:&nbsp;</td>
					<td><input type="text" name="plantGenus" size="25"></td>
				</tr>
				<tr>
					<td align="right">Common Name:&nbsp;</td>
					<td><input type="text" name="commonName" size="25"></td>
				</tr>
				<tr>
					<td align="right" valign="top">Codes:&nbsp;</td>
					<td>
						<table cellpadding="2" width="100%">
							<tr>
								<td>
									Full Sun<br />
									<input type="checkbox" name="code[]" value="1" />
								</td>
								<td>
									Partial Shade<br />
									<input type="checkbox" name="code[]" value="2" />
								</td>
								<td>
									Full Shade<br />
									<input type="checkbox" name="code[]" value="3" />
								</td>
							</tr>
							<tr>
								<td>
									Seashore<br />
									<input type="checkbox" name="code[]" value="4" />
								</td>
								<td>
									Rock Garden<br />
									<input type="checkbox" name="code[]" value="5" />
								</td>
								<td>
									Drought-Tolerant<br />
									<input type="checkbox" name="code[]" value="6" />
								</td>
							</tr>
							<tr>
								<td>
									Deer-Resistant<br />
									<input type="checkbox" name="code[]" value="7" />
								</td>
								<td>
									Butterflies<br />
									<input type="checkbox" name="code[]" value="8" />
								</td>
								<td>
									Cut Flower<br />
									<input type="checkbox" name="code[]" value="9" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left" valign="top">
						<select name="zone">
							<option selected>Choose a zone(s) for this genus ...</option>
<?php
									//	Generate the drop-down menu for $zone
									generateDropDownMenu("SELECT * FROM PLANT_ZONE");
?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right" valign="top">Add a short description<br />for the genus here:&nbsp;</td>
					<td>
						<textarea name="genDesc" cols="50" rows="12"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Create Genus" />&nbsp;&nbsp;
						<input type="reset" name="reset" value="Clear Form" />
					</td>
				</tr>
			</table>
		</form>
<?php
								}	else	{
									prepare_entry("add");
									$sql = mysql_query ("SELECT * FROM PLANT_CAT WHERE `catID` = $catID");
									$row = mysql_fetch_array ($sql);
									echo "<h1>".$row["plantCategory"]."</h1>\n";
									mysql_free_result ($sql);
									echo "<h2>".$genus."</h2>\n";
									$name = stripslashes ($name);
									echo "<h2><i>".$name."</i></h2>\n";
									echo "<h3>";
									echo "<img src=\"../catalog/images/codes/";
									getArrayValues($code);
									echo ".gif\" />&nbsp;&nbsp;";
									$sql = mysql_query ("SELECT * FROM PLANT_ZONE WHERE `zoneID` = $zone");
									$row = mysql_fetch_array ($sql);
									echo $row["zone"]."</h3>\n";
									mysql_free_result ($sql);
									echo "<p><i>";
									$desc = stripslashes($desc);
									echo $desc;
									echo "</i></p>\n";
									echo "<div align=\"right\"><a href=\"".$self."\">Back to admin screen</a></div>\n";
								}
								break;
							case "edit":
								print "$category&gt;$subcategory&gt;$editMode\n";
								if (!$submit) {
?>
		<form action="<?= $_SERVER["PHP_SELF"]; ?>?c=catalogue&s=genus&mode=edit" method="post">
<?php
									if (!$catID) {										// Drop-down menu for category selection.
?>
			<select name="catID" onchange="this.form.submit();">
				<option value="" selected>Choose a plant category to begin ...</option>
<?php	
										// Create the values for the drop-down menu from the database.
										$sql = mysql_query ("SELECT * FROM PLANT_CAT");
										do	{
											echo "\t\t\t\t<option value=".$row["catID"].">".$row["plantCategory"]."</option>\n";
										}	while ($row = mysql_fetch_array ($sql));
										mysql_free_result ($sql);
										echo "\t\t\t</select>\n";
									}	else {												// Category selected; list genii for selection.
												// Make sure the catID variable gets carried through to the next script.
										echo "<input type=\"hidden\" name=\"catID\" value=\"".$catID."\" />\n";
										echo "\t\t\t<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n";
										$sql = mysql_query ("SELECT * FROM PLANT_GEN WHERE catID = $catID ORDER BY plantGenus");
										$row = mysql_fetch_array ($sql);
										do	{
											echo "\t\t\t\t<tr>\n";
											echo "\t\t\t\t\t<td width=\"10\"><input type=\"radio\" name=\"genusID\" value=\"".$row["genusID"]."\" /></td>\n";
											echo "\t\t\t\t\t<td align=\"left\">".$row["plantGenus"]."</td>\n";
											echo "\t\t\t\t</tr>\n";
										}	while ($row = mysql_fetch_array ($sql));
										mysql_free_result ($sql);
										$query = mysql_query ("SELECT count(*) AS count FROM PLANT_GEN");
										$result = mysql_fetch_array ($query);
										$rows = $result["count"];
										echo "\t\t\t\t<tr>\n\t\t\t\t\t<td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Edit Genus\" />&nbsp;&nbsp;<input type=\"reset\" name=\"reset\" value=\"Clear Form\" /></td>\n\t\t\t\t</tr>\n";
										echo "\t\t\t</table>\n";
									}	// Close out the table and exit the script.
?>
		</form>
<?php
								}	else	{
									// First we open up the table for the last two times through the script.
									if (!$genus) {										// Set up the form to edit the selected genus.
										echo "<h2>Edit a Plant Genus</h2>\n";
										echo "\t\t<table>\n\t\t\t<tr>\n";
										echo "<form action=\"".$self."?c=catalogue&s=genus&mode=edit\" method=\"post\">\n";
										$sql = mysql_query ("SELECT * FROM PLANT_CAT c, PLANT_GEN g, PLANT_CODES d, PLANT_ZONE z WHERE c.catID = g.catID AND c.catID = $catID AND d.codeID = g.codeID AND z.zoneID = g.zoneID AND g.genusID = $genID") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".");
										$row = mysql_fetch_array ($sql);
?>
				<td align="right" valign="middle">Plant Genus:&nbsp;</td>
				<td align="left" valign="middle"><br />
					<input type="text" name="plantGenus" size="25" value="<?= $row["plantGenus"] ?>"/><br />&nbsp;
					<input type="hidden" name="genusID" value="<?= $genID ?>" />
					<input type="hidden" name="catID" value="<?= $catID ?>" />
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle">Common Name:&nbsp;</td>
				<td align="left" valign="middle"><br /><input type="text" name="commonName" size="25" value="<?= $row["commonName"] ?>"/><br />&nbsp;</td>
			</tr>
			<tr>
				<td align="right" valign="top">Codes:&nbsp;</td>
				<td>
					<table border="0" cellpadding="2" cellspacing="2" width="100%">
						<tr>
<?php
								$codeNum = $row["codeNum"];
								$codeLen = strlen($codeNum);
								$codeArr = array();
								for ($i = 0; $i<$codeLen; $i++) {
									$cString = substr ($codeNum,$i,1);
									$codeArr[$i] = $cString;
								}
?>
							<td align="center" valign="middle">
								Full Sun<br />
								<input type="checkbox" name="code[]" value="1" <?php if (in_array("1",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Partial Shade<br />
								<input type="checkbox" name="code[]" value="2" <?php if (in_array("2",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Full Shade<br />
								<input type="checkbox" name="code[]" value="3" <?php if (in_array("3",$codeArr))	{ echo "checked"; }	?> />
							</td>
						</tr>
						<tr>
							<td align="center" valign="middle">
								Seashore<br />
								<input type="checkbox" name="code[]" value="4" <?php if (in_array("4",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Rock Garden<br />
								<input type="checkbox" name="code[]" value="5" <?php if (in_array("5",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Drought-Tolerant<br />
								<input type="checkbox" name="code[]" value="6" <?php if (in_array("6",$codeArr))	{ echo "checked"; }	?> />
							</td>
						</tr>
						<tr>
							<td align="center" valign="middle">
								Deer-Resistant<br />
								<input type="checkbox" name="code[]" value="7" <?php if (in_array("7",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Butterflies<br />
								<input type="checkbox" name="code[]" value="8" <?php if (in_array("8",$codeArr))	{ echo "checked"; }	?> />
							</td>
							<td align="center" valign="middle">
								Cut Flower<br />
								<input type="checkbox" name="code[]" value="9" <?php if (in_array("9",$codeArr))	{ echo "checked"; }	?> />
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="right" valign="middle"><p>Hardiness Zone(s):&nbsp;</p></td>
				<td align="left" valign="middle"><br />
					<select name="zone">
<?php
										$query = mysql_query ("SELECT * FROM PLANT_ZONE");
										$result = mysql_fetch_array ($query);
										do	{
											if ($result["zoneID"] == $row["zoneID"]) {
												echo "<option value=\"".$result["zoneID"]."\" selected>".$result["zone"]."</option>\n";
											}	else {
												echo "<option value=\"".$result["zoneID"]."\">".$result["zone"]."</option>\n";
											}
										}	while ($result = mysql_fetch_array ($query));
										mysql_free_result ($query);
?>
					</select>
				<br />&nbsp;</td>
			</tr>
			<tr>
				<td align="right" valign="top">Add a short description for the genus here:&nbsp;</td>
				<td align="left" valign="top">
					<textarea name="genDesc" cols="45" rows="12"><?= $row["genDesc"] ?></textarea>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td align="center" valign="bottom"><br />
					<input type="submit" name="submit" value="Submit Changes" />&nbsp;&nbsp;
					<input type="reset" name="reset" value="Clear Form" /><br />&nbsp;
				</td>
			</form>
<?php
									}	else {
										echo "<h2>Edit a Plant Genus</h2>\n";
										prepare_entry ("edit");
										$sql = mysql_query ("SELECT * FROM PLANT_CAT c, PLANT_GEN g, PLANT_CODES o, PLANT_ZONE z WHERE c.catID = g.catID AND c.catID = $catID AND g.genusID = $genID AND o.codeID = g.codeID AND z.zoneID = g.zoneID");
										$row = mysql_fetch_array ($sql);
										echo $row["plantCategory"];
?>
			<h2><?= $row["plantGenus"] ?></h2>
			<h2><i>
<?php
										$name = $row["commonName"];
										$name = stripslashes($name);
										echo $name;
?>
			</i></h2>
			<h3 style="text-align:center;">
<?php
										echo "<img src=\"../catalog/images/codes/";
										echo $row["codeNum"];
										echo ".gif\" />&nbsp;&nbsp;";
										echo $row["zone"] . "</h3>\n";
?>
			<p><i>
<?php
										echo $row["genDesc"];
										mysql_free_result ($sql);
									}
									echo "</i></p>\n";
									echo "<div align=\"right\"><a href=\"".$self."\">Back to admin screen</a></div>\n";
								}
								break;
							case "delete":
								print "$category&gt;$subcategy&gt;$editMode\n";
								echo "\t\t\t<h2>Delete a Plant Genus</h2>\n";
								if (!$submit) {
									echo "\t\t\t\t<form action=\"".$self."?c=catalogue&s=genus&mode=delete\" method=\"post\">\n";
									if (!$catID) {
							?>
											<select name="catID" onchange="this.form.submit();">
												<option value="" selected>Choose a plant category to begin ...</option>
							<?php
										$sql = mysql_query ("SELECT * FROM PLANT_CAT");
										$row = mysql_fetch_array ($sql);
										do	{
											echo "\t\t\t\t\t<option value=".$row["catID"].">".$row["plantCategory"]."</option>\n";
										}	while ($row = mysql_fetch_array ($sql));
										mysql_free_result ($sql);
										echo "\t\t\t\t</select>\n";
									}	else {
										$plants = new Table;
										$plants->setPad("3");
										$plants->setWidth("100%");
										$plants->openTable();
							
										$sql = mysql_query ("SELECT * FROM PLANT_GEN WHERE catID = $catID ORDER BY plantGenus");
										$row = mysql_fetch_array ($sql);
										$counter = 1;
										do	{
											$plants->newCell(1,1,"","","left","top");
											echo "<input type=\"radio\" name=\"genusID\" value=\"".$row["genusID"]."\" />";
											$plants->changeCells(1,1,"","","left","middle");
											echo $row["plantGenus"];
											if (!($counter % 2)) {
												$plants->changeRows();
											}
											$counter++;
										}	while ($row = mysql_fetch_array ($sql));
										mysql_free_result ($sql);
										$plants->newCell(4,1,"","","center","bottom");
										echo "<br />\n<input type=\"submit\" name=\"submit\" value=\"Delete Genus\" />&nbsp;&nbsp;<input type=\"reset\" name=\"reset\" value=\"Clear Form\" />";
										$plants->closeTable();
									}
								echo "\t\t\t</form>\n";
								}	else	{
									prepare_entry ("delete");
									echo "\t\t\t\t<p><a href=\"".$self."\">Return to Delete Screen</a></p>\n";
								}
								break;
						}
						break;
					case "varietal":
						switch ($editMode)	{
							case "add":
								if (!$catID)	{
?>
		<!-- Form #1 - Category Selection -->
		<form name="categories" action="" method="post">
			<select name="catID" onchange="this.form.submit()">
				<option selected>-- SELECT A PLANT CATEGORY --</option>
<?php
									generateDropDownMenu("SELECT * FROM `PLANT_CAT`");
?>
			</select>
		</form>
<?php
									exit;
								}
					
								if (!$submit)	{
?>
		<!-- Form #4 - Specifics (Add/Delete) -->
		<form name="add_edit" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td colspan="2" align="left" valign="top">
						<select name="genusID" onchange="this.form.submit()">
							<option selected>-- SELECT A PLANT GENUS --</option>
<?php
									generateDropDownMenu("SELECT * FROM `PLANT_GEN` WHERE `catID` = $catID");
?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">Varietal Name:&nbsp;<input type="text" name="varietalName" size="20" /></td>
					<td align="left" valign="top">Cultivar:&nbsp;<input type="text" name="cultivar" size="20" /></td>
				</tr>
				<tr>
					<td colspan="2" align="left" valign="top">
						<textarea name="description" cols="50" rows="12"></textarea>
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">
						<select name="potID">
							<option selected>-- POT SIZE --</option>
<?php
									generateDropDownMenu("SELECT * FROM `PLANT_POTS`");
?>
						</select>
					</td>
					<td align="left" valign="top">
						<select name="priceID">
							<option selected>-- PRICE --</option>
<?php
									generateDropDownMenu("SELECT * FROM `PLANT_PRICE`");
?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right" valign="bottom"><input type="submit" name="submit" value="Submit" /></td>
					<td align="left" valign="bottom"><input type="reset" value="Reset" /></td>
				</tr>
			</table>
		</form>
<?php
								}	else	{
									$sql = "INSERT INTO `PLANT_PLANTS` (`genusID`,`varietalName`,`cultivar`,`description`,`potID`,`priceID`)";
									$sql .= "VALUES ($genID,\"$varietal\",\"$cultivar\",\"$vDesc\",$potID,$priceID)";
									echo $sql."<br />\n";
									$query = mysql_query($sql) or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".<br />\n");
									echo "Plant varietal has been very happily added.<br />\n";
									foreach ($_POST as $key=>$value) {
										echo "<b>".$key.":</b> ".$value."<br />\n";
									}
								}
								break;
							case "edit":
								if (!$plantID)	{
									if (!$genID)	{
										if (!$catID)	{
?>
		<!-- Form #1 - Category Selection -->
		<form name="categories" action="" method="post">
			<select name="catID" onchange="this.form.submit()">
				<option selected>-- SELECT A PLANT CATEGORY --</option>
<?php
											generateDropDownMenu("SELECT * FROM `PLANT_CAT`");
?>
			</select>
		</form>
<?php
											exit;
										}
?>
		<!-- Form #2 - Genus Selection -->
		<form name="genus" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<select name="genusID" onchange="this.form.submit()">
				<option selected>-- SELECT A PLANT GENUS --</option>
<?php
										generateDropDownMenu("SELECT * FROM `PLANT_GEN` WHERE `catID` = $catID");
?>
			</select>
		</form>
<?php
										exit;
									}
?>
		<form name="plant" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<input type="hidden" name="genusID" value="<?= $genID; ?>" />
			<select name="plantID" onchange="this.form.submit()">
				<option selected>-- SELECT A VARIETAL OR CULTIVAR --</option>
<?php
									$sql = mysql_query("SELECT * FROM `PLANT_PLANTS` WHERE `genusID` = $genID");
									$result = mysql_fetch_assoc($sql);
									do	{
										if (urlencode($result["cultivar"]) != "%0A")	{
											$cultivar = "'".$result["cultivar"]."'";
										}	else	{
											$cultivar = $result["cultivar"];
										}
										echo "<option value=\"".$result["plantID"]."\">".$result["varietalName"]." ".$cultivar."</option>\n";
									}	while ($result = mysql_fetch_assoc($sql));
									mysql_free_result($sql);
?>
			</select>
		</form>
<?php
									exit;
								}
					
								if (!$submit)	{
									$q = mysql_query("SELECT * FROM `PLANT_PLANTS` WHERE `plantID` = $plantID");
									$arr = mysql_fetch_assoc($q);
?>
		<!-- Form #4 - Specifics (Add/Delete) -->
		<form name="add_edit" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td align="left" valign="top">Varietal Name:&nbsp;<input type="text" name="varietalName" size="20" value="<?= $arr["varietalName"]; ?>" /></td>
					<td align="left" valign="top">Cultivar:&nbsp;<input type="text" name="cultivar" size="20" value="<?= $arr["cultivar"]; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2" align="left" valign="top">
						<textarea name="description" cols="50" rows="12"><?= $arr["description"]; ?></textarea>
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">
						<select name="potID">
							<option selected>-- POT SIZE --</option>
<?php
									$query = mysql_query ("SELECT * FROM `PLANT_POTS`");
									$res = mysql_fetch_assoc($query);
									do	{
										echo "<option value=\"".$res["potID"]."\"";
										if ($res["potID"] == $arr["potID"])	{
											echo " selected";
										}
										echo ">".$res["potSize"]."</option>\n";
									} while ($res = mysql_fetch_assoc($query));
									mysql_free_result($query);
?>
						</select>
					</td>
					<td align="left" valign="top">
						<select name="priceID">
							<option selected>-- PRICE --</option>
<?php
									$query = mysql_query ("SELECT * FROM `PLANT_PRICE`");
									$res = mysql_fetch_assoc($query);
									do	{
										echo "<option value=\"".$res["priceID"]."\"";
										if ($res["priceID"] == $arr["priceID"])	{
											echo " selected";
										}
										echo ">".$res["price"]."</option>\n";
									} while ($res = mysql_fetch_assoc($query));
									mysql_free_result($query);
									mysql_free_result($q);
?>
						</select>
					</td>
				</tr>
				<tr>
					<input type="hidden" name="plantID" value="<?= $plantID; ?>">
					<td align="right" valign="bottom"><input type="submit" name="submit" value="Submit" /></td>
					<td align="left" valign="bottom"><input type="reset" value="Reset" /></td>
				</tr>
			</table>
		</form>
<?php
								}	else	{
									$sql = mysql_query("UPDATE `PLANT_PLANTS` SET `varietalName` = \"$varietal\",`cultivar`=\"$cultivar\",`description`=\"$vDesc\",`potID`=$potID,`priceID`=$priceID WHERE `plantID`=$plantID") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".<br />\n");
									echo "The selected varietal \"".$varietal." '".$cultivar."'\" has been edited.<br />\n";
								}
								break;
							case "delete":
								if (!$genID)	{
									if (!$catID)	{
?>
		<!-- Form #1 - Category Selection -->
		<form name="categories" action="" method="post">
			<select name="catID" onchange="this.form.submit()">
				<option selected>-- SELECT A PLANT CATEGORY --</option>
<?php
										generateDropDownMenu("SELECT * FROM `PLANT_CAT`");
?>
			</select>
		</form>
<?php
										exit;
										}
?>
		<!-- Form #2 - Genus Selection -->
		<form name="genus" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<select name="genusID" onchange="this.form.submit()">
				<option selected>-- SELECT A PLANT GENUS --</option>
<?php
									generateDropDownMenu("SELECT * FROM `PLANT_GEN` WHERE `catID` = $catID");
?>
			</select>
		</form>
<?php
									exit;
									}
						
									if (!$submit)	{
?>
		<form name="delete" action="" method="post">
			<input type="hidden" name="catID" value="<?= $catID; ?>" />
			<input type="hidden" name="genusID" value="<?= $genID; ?>" />
			<select name="plantID[]" size="12" multiple>
				<option selected>-- SELECT A VARIETAL OR CULTIVAR TO DELETE --</option>
<?php
										$sql = mysql_query("SELECT * FROM `PLANT_PLANTS` WHERE `genusID` = $genID");
										$result = mysql_fetch_assoc($sql);
										do	{
											if (urlencode($result["cultivar"]) != "%0A")	{
												$cultivar = "'".$result["cultivar"]."'";
											}	else	{
												$cultivar = $result["cultivar"];
											}
											echo "<option value=\"".$result["plantID"]."\">".$result["varietalName"]." ".$cultivar."</option>\n";
										}	while ($result = mysql_fetch_assoc($sql));
										mysql_free_result($sql);
?>
			</select>
			<input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;
			<input type="reset" value="Reset" />
		</form>
<?php
									}	else	{
										foreach ($plantID as $item)	{
											$sql = mysql_query("DELETE FROM `PLANT_PLANTS` WHERE `plantID` = $item");
											echo "<p><b>Plant ID #".$item." has been deleted.</b></p>\n";
										}
									}
									break;
							}
						break;
					default:
						include ("default.php");
				}
	#			break;
	#		[snip]
	#	}
?>