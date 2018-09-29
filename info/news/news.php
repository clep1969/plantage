<?php
	$conn = mysql_connect (HOST,USER,PASS);
	mysql_select_db("plantage",$conn);
	
	$sql = mysql_query ("SELECT * FROM headlines");
	
	do	{
		printf ("<h1>%s</h1>\n", $result["headline"]);
		$body = nl2br ($result["body"]);
		print "<p>$body</p>\n";
		printf ("<p class=\"smallText\">%s</p>\n", $result["timestamp"]);
		echo "<p></p>\n";
	}	while	($result = mysql_fetch_array ($sql));
?>
