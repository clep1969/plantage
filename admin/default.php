<?php
	#|	DEFAULT.php
	#|	©2003 The Plantage, Inc.

	if (ereg("default.php",$_SERVER["PHP_SELF"]))	{
		header ("Location:../admin.php");
	}

	switch ($category)	{
		case "headlines":
?>
			<!-- Headlines -->
			<div align="left">
<?php
	listSelections();
	echo "<h3 style=\"text-align:center;\">Or <a href=\"".$self."?mode=add\">click here</a> to add a new headline.</h3>\n";
?>
			</div>
			<!-- End headlines -->
<?php
			break;
		case "images":
			echo "<pre>&lt;?php\tinclude (\"images.php\");\t?&gt;</pre>";
			echo "\nThis section is not yet complete.\n";
			break;
		case "accounts":
?>
			<!-- Default action/Accounts -->
			<form action="<?= $self; ?>" method="get">
				<input type="hidden" name="c" value="accounts" />
				<h2 style="text-align:center">Accounts</h2>
				<p><input type="radio" name="mode" value="add" />&nbsp;Add New User Account</p>
				<p><input type="radio" name="mode" value="edit" />&nbsp;Edit Existing User Account</p>
				<p><input type="radio" name="mode" value="delete" />&nbsp;Delete User Account</p>
				<p style="text-align:center;">
					<input type="submit" name="submit" value="Next &gt;&gt;" />&nbsp;
					<input type="reset" value="Clear Form" />
				</p>
			</form>
<?
			break;
		case "catalogue":
		default:
?>
			<!-- Default action/Catalogue -->
			<form action="<?= $self; ?>" method="get">
				<input type="hidden" name="c" value="catalogue" />
				<table border="0" cellpadding="5" cellspacing="10" width="75%">
					<tr>
						<td align="left" valign="top" style="border:1px solid #333;">
							<h3 style="text-align:center">Action</h3>
							<p><input type="radio" name="mode" value="add" />&nbsp;Add</p>
							<p><input type="radio" name="mode" value="edit" />&nbsp;Edit</p>
							<p><input type="radio" name="mode" value="delete" />&nbsp;Delete</p>
						</td>
						<td align="left" valign="top" style="border:1px solid #333;">
							<h3 style="text-align:center">Subcategory</h3>
							<p><input type="radio" name="s" value="genus" />&nbsp;Genus</p>
							<p><input type="radio" name="s" value="varietal" />&nbsp;Varietal</p>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center" valign="bottom">
							<input type="submit" name="OK" value=" OK " />&nbsp;&nbsp;
							<input type="reset" name="reset" value="Clear" />
						</td>
					</tr>
				</table>
			</form>
			<!-- End default action/catalogue -->
<?php
			break;
	}
?>