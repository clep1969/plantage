<?php
		function generateDropDownMenu($query) {
			$sql = mysql_query ($query);
			$row = mysql_fetch_row ($sql);
			do	{
				echo "<option value=\"".$row[0]."\">".$row[1]."</option>\n";
			}	while ($row = mysql_fetch_row ($sql));
			mysql_free_result ($sql);
		}

		function getArrayValues($array) {
			if (is_array($array)) {
				while (list($key,$value) = each ($array)) {
					echo $value;
				}
			}
		}
		
		function assignCodeID() {
			global $code;
			$codeNum = implode($code);
			$sql = mysql_query ("SELECT * FROM PLANT_CODES WHERE codeNum = $codeNum") or die ("<b>assignCodeID:</b> Error ".mysql_errno()." (".mysql_error().").");
			$row = mysql_fetch_array ($sql);
			$codeID = $row["codeID"];
			mysql_free_result($sql);
			return $codeID;
		}

		function prepare_entry ($mode) {
			global $catID, $genus, $genID, $code, $zone, $name, $desc;
			if ($mode == "delete") {
				$sql = mysql_query ("DELETE FROM PLANT_GEN WHERE genusID = $genID") or die ("<b>Sorry, an error occurred.</b> Please go <a href=\"javascript:history.go(-1);\">back</a> and submit the form again.");
				$msg = "<p>The selected genus has successfully been deleted from the database.</p>\n";
			}	else	{
				$error_msg = "";
				if (!is_numeric($catID)) {
					$error_msg .= "<li>A valid plant category is not assigned to this genus.</li>\n";
				}
				if (empty($genus)) {
					$error_msg .= "<li>You must supply a name for this plant genus.</li>\n";
				}
				if (empty($code)) {
					$error_msg .= "<li>A genus must have one or more codes assigned to it.</li>\n";
				}
				if (!is_numeric(&$zone)) {
					$error_msg .= "<li>You must assign a zone (or zones) to this genus.</li>\n";
				}
				if (!empty($error_msg)) {
					echo "<p><b>Some errors were found in your entry.</b></p>\n";
					echo "<div align=\"left\">\n";
					echo "<p>Please go back and correct the following:\n<ul>\n";
					echo $error_msg;
					echo "</ul>\n";
					echo "<a href=\"javascript:history.go(-1);\">Back</a>\n";
					echo "</div>\n";
					exit;
				}	else	{
					$codeID = assignCodeID();
					if ($mode == "add") {
						$sql = mysql_query ("INSERT INTO PLANT_GEN (`genusID`,`plantGenus`,`commonName`,`genDesc`,`codeID`,`zoneID`,`catID`) VALUES('\n','$genus','$name','$desc',$codeID,$zone,$catID)") or die ("<b>Error ".mysql_errno().":</b> ".mysql_error().".");
						$msg = "<p>The new genus has been successfully added to the database.</p>\n";
					}	elseif ($mode == "edit") {
						$query = mysql_query ("UPDATE `PLANT_GEN` SET `plantGenus` = '$genus', `commonName` = '$name', `genDesc` = '$desc', `codeID` = $codeID, `zoneID` = $zone WHERE `genusID` = $genID") or die ("Sorry, an error occurred. Please go <a href=\"javascript:history.go(-1);\">back,</a> re-enter your changes and try again.");
						$msg = "<p>The selected genus has successfully been edited in the database.</p>\n";
					}
				}
			}
			echo "<h2>Success!</h2>\n";
			echo $msg;
		}
?>