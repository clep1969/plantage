<?php
	#|	ACCOUNTS.PHP
	#|
	#|	switch ($category)	{
	#|		[snip]
	#|		case "accounts":
				include ("include/forms.php");
				switch($editMode)	{
					case "add":
						$varAction = "Add";
						if (!$realName)	{
							$form = 0;
						}	else	{
							// process form
							$sql = mysql_query ("INSERT INTO `users` (`user_id`,`user_realname`,`user_uname`,`user_pass`,`user_email`,`user_add1`,`user_add2`,`user_city`,`user_state`,`user_zip`,`user_TIN`,`user_auth_level`) VALUES ('\n','$realName','$uname','$pass','$email','$add1','$add2','$city','$state',$zip,$tin,$authLevel)") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".<br />\n");
							echo "<a href=\"".$self."\">Back to Admin Home</a>\n";
						}
						break;
					case "edit":
						$varAction = "Edit";
						$button = "Choose";
						if (!$submit)	{
							$form = 1;
						}	elseif (!$uname)	{
							$query = mysql_query ("SELECT * FROM `users` WHERE `user_id` = $uID");
							$form0 = mysql_fetch_assoc($query);
							$form = 0;
						}	else	{
							// process form
							$sql = mysql_query ("UPDATE `users` SET `user_realname` = '$realName',`user_uname` = '$uname',`user_pass` = '$pass',`user_email` = '$email',`user_add1` = '$add1',`user_add2` = '$add2',`user_city` = '$city',`user_state` = '$state',`user_zip` = $zip,`user_TIN` = $tin,`user_auth_level` = $authLevel WHERE `user_ID` = $uID") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".<br />\n");
							echo "<a href=\"".$self."\">Back to Admin Home</a>\n";
						}
						break;
					case "delete":
						$varAction = "Delete";
						$button = $varAction;
						if (!$submit)	{
							$form = 1;
						}	else	{
							// process form
							$sql = mysql_query ("DELETE FROM `users` WHERE `user_ID` = $uID") or die ("<b>Error #".mysql_errno().":</b> ".mysql_error().".<br />\n");
							echo "<a href=\"".$self."\">Back to Admin Home</a>\n";
						}
						break;
					default:
						include ("default.php");
						break;
				}
	#|			break;
	#|		[snip]
	#|	}

	switch($form)	{
		case "0":
?>
<style>
	td	{	font-size:8pt;	}
	td.mandatory	{	color:#900;	}
</style>
<h3>Items in red are mandatory.</h3>
<form action="<?= $self; ?>?c=accounts&mode=<?= $editMode; ?>" method="post">
	<table>
		<tr>
			<td align="right" class="mandatory">Your Name:&nbsp;</td>
			<td><input type="text" name="realname" size="20" max="50" value="<?= $form0["user_realname"]; ?>" /></td>
			<td align="right" class="mandatory">Username (15 characters max):&nbsp;</td>
			<td><input type="text" name="uname" size="8" max="15" value="<?= $form0["user_uname"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right" class="mandatory">Password (15 characters max):&nbsp;</td>
			<td><input type="password" name="pass1" size="8" max="15" value="<?= $form0["user_pass"]; ?>" /></td>
			<td align="right" class="mandatory">Re-type password to confirm:&nbsp;</td>
			<td><input type="password" name="pass2" size="8" max="15"/></td>
		</tr>
		<tr>
			<td align="right" class="mandatory">Email Address:&nbsp;</td>
			<td colspan="3"><input type="text" name="email" size="25" max="50" value="<?= $form0["user_email"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right" class="mandatory">Address:&nbsp;</td>
			<td colspan="3"><input type="text" name="add1" size="50" max="75" value="<?= $form0["user_add1"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right">Address (Line 2):&nbsp;</td>
			<td colspan="3"><input type="text" name="add2" size="50" max="75" value="<?= $form0["user_add2"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right" class="mandatory">City:&nbsp;</td>
			<td colspan="3">
				<table>
					<tr>
						<td><input type="text" name="city" size="15" max="25" value="<?= $form0["user_city"]; ?>" /></td>
						<td align="right" class="mandatory">State:&nbsp;</td>
						<td><input type="text" name="state" size="2" max="2" value="<?= $form0["user_state"]; ?>" /></td>
						<td align="right" class="mandatory">ZIP:&nbsp;</td>
						<td><input type="text" name="zip" size="5" max="5" value="<?= $form0["user_zip"]; ?>" /></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="right">EIN/TID Number:&nbsp;</td>
			<td><input type="text" name="tid" size="9" max="9" value="<?= $form0["user_TIN"]; ?>" /></td>
			<td align="right" class="mandatory">Administration Rights:&nbsp;</td>
			<td>
				<select name="rights">
<?php
	$sql = mysql_query ("SELECT `user_auth_level` FROM `users`");
	$row = mysql_fetch_row ($sql);
	$rights = array("0"=>"-- USER RIGHTS --","1"=>"Superuser","2"=>"Administrator","3"=>"Guest");
	for ($i = 0; $i < 4; $i++)	{
		echo "\t\t\t\t\t<option value = \"".$i."\"";
		if ($i == $form0["user_auth_level"])	echo " selected";
		echo ">".$rights[$i]."</option>\n";
	}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center">
				<br />
				<input type="hidden" name="user_id" value="<?= $form0["user_ID"]; ?>" />
				<input type="submit" name="submit" value="<?= $varAction; ?> User" />&nbsp;&nbsp;
				<input type="reset" value="Clear Form" />
			</td>
		</tr>
	</table>
</form>
<?php
			break;
		case "1":
?>
<form action="<?= $self; ?>?c=accounts&mode=<?= $editMode; ?>" method="post">
	<table>
		<tr>
			<td>
				<select name="user_id" size="15" multiple>
					<option selected>-- CHOOSE A USER TO <?= strtoupper($varAction); ?> --</option>
<?php
	generateDropDownMenu("SELECT * FROM users");
?>
				</select>
			</td>
			<td align="left" valign="bottom">
				<input type="submit" name="submit" value="<?= $button; ?>" /><br />
				<input type="reset" value="Clear Form" />
			</td>
		</tr>
	</table>
</form>
<?php
			break;
	}
?>