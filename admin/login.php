<?php
	#|	LOGIN.PHP
#	session_destroy();

	@ include ("include/config.php");
	@ include ("include/constants.php");

	$db = mysql_connect (HOST,USER,PASS) or die (mysql_error());
	mysql_select_db ("plantage",$db);

	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
	$submit = $_POST["submit"];

	@ include ("../include/header.inc.php");
	echo "<div id=\"body\">\n";

	if ($submit)	{
		session_start();

		$sql = mysql_query ("SELECT * FROM `users` WHERE `user_uname` = '$uname' AND `user_pass` = '$pass'") or die (mysql_error());
		$affected_rows = mysql_num_rows ($sql);

		if ($affected_rows == 1) {
			$_SESSION["uname"] = $uname;
			$_SESSION["pass"] = $pass;
			echo "<h1>Login Accepted!</h1>";
			echo "<p>You may now <a href=\"index.php\">visit</a> the admin page.</p>\n";
			exit;
		}	else	{
			echo "<h1>Sorry, Login Not Accepted.</h1>\n";
		}
	}
?>
	<form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
		<h1 style="margin:0px;">Login to The Plantage:Admin Page</h1>
		<p style="margin:0px;"><b>Username:</b>&nbsp;<input type="text" name="uname" /></p>
		<p style="margin:0px;"><b>Password:</b>&nbsp;&nbsp;<input type="password" name="pass" /></p>
		<p style="margin:0px;text-align:left;"><input type="submit" name="submit" value="Login" />&nbsp;<input type="reset" name="reset" value="Clear Form" /></p>
	</form>
	</div>
<?php
	@ include ("../include/footer.inc.php");
?>
</body>

</html>