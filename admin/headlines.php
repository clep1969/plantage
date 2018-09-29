<?php
	$no = $_POST["id"];
	#	edit_headlines.php
	#	To be folded in to admin.php when it is perfected.
	#	Or not.
	#
	#	STATUS: SOLID AS OF 5/8/03.
	#
	#	switch ($category)	{
	#		[snip]
	#		case "headlines":

				switch ($editMode) {
					case "add":
						//	add headlines here
						if (!$submit) {
?>
	<form action="<?= $self; ?>?c=headlines&mode=add" method="post">
		<div class="col1" style="width: 90px; padding-left: 5px;">
			<p><b>Enter Headline:</b></p>
			<p><b>Enter Body:</b></p>
		</div>
		<div class="col2" style="width: 400px;">
			<p><input type="text" name="headline" size="36" value="" /></p>
			<p><textarea name="body" cols="40" rows="10"></textarea></p>
			<input type="hidden" name="edit" value="headlines" />
			<input type="hidden" name="mode" value="add" />
		</div>

		<div class="footer">
			<input type="submit" name="submit" value="Add Headline" />
			&nbsp;
			<input type="reset" name="reset" value="Clear Changes" />
		</div>
	</form>
<?php
						}	else	{
							$query = mysql_query ("INSERT INTO headlines (`id`, `headline`, `body`, `timestamp`) VALUES ('\n','$headline','$body','\n')");
							echo "<h2><i>The headline has been added.</i><br />&nbsp;</h2>\n";
							listSelections ();
							echo "<h3 style=\"text-align:center;\">Or <a href=\"".$self."?c=headlines&mode=add\">click here</a> to add a new headline.</h3>\n";
						}
						break;
					case "edit":
						//	edit headlines here
						if (!$submit)	{
							$sql = mysql_query ("SELECT * FROM headlines WHERE `id` = $id");
							$row = mysql_fetch_array ($sql);
?>
	<form action="<?= $self; ?>?c=headlines&mode=edit&id=<?= $id; ?>" method="post">
		<div class="col1">
			<p><b>Headline:</b></p>
			<p><b>Body:</b></p>
		</div>
		<div class="col2">
			<?= "<p><input type=\"text\" name=\"headline\" size=\"36\" value=\"" . $row["headline"] . "\" /></p>\n"; ?>
			<?= "<p><textarea name=\"body\" cols=\"40\" rows=\"10\">" . $row["body"] . "</textarea></p>\n"; ?>
			<?= "<input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\" />\n"; ?>
<!--			<input type="hidden" name="edit" value="headlines" />
			<input type="hidden" name="mode" value="edit" />
-->		</div>

		<div class="footer">
			<input type="submit" name="submit" value="Commit Changes" />
			&nbsp;
			<input type="reset" name="reset" value="Clear Changes" />
		</div>
	</form>
<?php
						}	else	{
							$query = mysql_query ("UPDATE headlines SET `headline` = '$headline', `body` = '$body' WHERE `id` = $no");
							echo "<h2><i>Your changes have been saved.</i><br />&nbsp;</h2>\n";
							listSelections();
							echo "<h3 style=\"text-align:center;\">Or <a href=\"".$self."?c=headlines&mode=add\">click here</a> to add a new headline.</h3>\n";
				}
						break;
					case "delete":
						//	delete headlines here
						$query = mysql_query ("DELETE FROM headlines WHERE `id` = $id");
						echo "<h2><i>The selected headline has been deleted.</i><br />&nbsp;</h2>\n";
						listSelections();
						echo "<h3 style=\"text-align:center;\">Or <a href=\"".$self."?c=headlines&mode=add\">click here</a> to add a new headline.</h3>\n";
						break;
					default:
						//	when all else fails
						listSelections();
						echo "<h3 style=\"text-align:center;\">Or <a href=\"".$self."?c=headlines&mode=add\">click here</a> to add a new headline.</h3>\n";
						break;
				}
	#			break;
	#		[snip]
	#	}

	function listSelections() {
		$sql = mysql_query ("SELECT * FROM headlines");
		echo "<div style=\"text-align:left\">\n";
		while ($row = mysql_fetch_array ($sql)) {
			echo "<h3>" . $row ["headline"] . "</h3>\n";
			echo "<p align=\"right\" class=\"smallText\">";
			echo "<a href=\"".$self."?c=headlines&mode=edit&id=" . $row["id"] . "\">Edit</a> | ";
			echo "<a href=\"".$self."?c=headlines&mode=delete&id=". $row["id"] . "\">Delete</a></p>\n";
		}
		echo "</div>\n";
		mysql_free_result ($sql);
	}
?>
