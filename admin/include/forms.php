<?php
	switch($form)	{
		case "0":
?>
<form action="<?= $self; ?>?c=accounts&mode=<?= $editMode; ?>" method="post">
	<table>
		<tr>
			<td align="right">Your Name:&nbsp;</td>
			<td><input type="text" name="realname" size="20" max="50" value="<?= $form0["user_realname"]; ?>" /></td>
			<td align="right">Username (15 characters max):&nbsp;</td>
			<td><input type="text" name="uname" size="8" max="15" value="<?= $form0["user_uname"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right">Password (15 characters max):&nbsp;</td>
			<td><input type="password" name="pass1" size="8" max="15" value="<?= $form0["user_pass"]; ?>" /></td>
			<td align="right">Re-type password to confirm:&nbsp;</td>
			<td><input type="password" name="pass2" size="8" max="15"/></td>
		</tr>
		<tr>
			<td align="right">Email Address:&nbsp;</td>
			<td colspan="3"><input type="text" name="email" size="25" max="50" value="<?= $form0["user_email"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right">Address:&nbsp;</td>
			<td colspan="3"><input type="text" name="add1" size="50" max="75" value="<?= $form0["user_add1"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right">Address (Line 2):&nbsp;</td>
			<td colspan="3"><input type="text" name="add2" size="50" max="75" value="<?= $form0["user_add2"]; ?>" /></td>
		</tr>
		<tr>
			<td align="right">City:&nbsp;</td>
			<td colspan="3">
				<table>
					<tr>
						<td><input type="text" name="city" size="15" max="25" value="<?= $form0["user_city"]; ?>" /></td>
						<td align="right">State:&nbsp;</td>
						<td><input type="text" name="state" size="2" max="2" value="<?= $form0["user_state"]; ?>" /></td>
						<td align="right">ZIP:&nbsp;</td>
						<td><input type="text" name="zip" size="5" max="5" value="<?= $form0["user_zip"]; ?>" /></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="right">EIN/TID Number:&nbsp;</td>
			<td><input type="text" name="tid" size="9" max="9" value="<?= $form0["user_TIN"]; ?>" /></td>
			<td align="right">Administration Rights:&nbsp;</td>
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