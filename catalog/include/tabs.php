		<td colspan="3" height="30" align="left" valign="bottom">
<?php
	switch ($catID)	{
		case "01":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"19,10,94,31\" href=\"%s\">\n",$page);
			printf ("<area shape=rect coords=\"172,10,247,31\" href=\"%s?catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"248,10,323,31\" href=\"%s?catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"324,10,399,31\" href=\"%s?catID=04\">\n",$page);
			printf ("<area shape=rect coords=\"400,10,475,31\" href=\"%s?catID=05\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_1.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "02":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"20,10,95,31\" href=\"%s\">\n",$page);
			printf ("<area shape=rect coords=\"96,10,171,31\" href=\"%s?catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"248,10,323,31\" href=\"%s?catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"324,10,399,31\" href=\"%s?catID=04\">\n",$page);
			printf ("<area shape=rect coords=\"400,10,475,31\" href=\"%s?catID=05\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_2.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "03":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"20,10,95,31\" href=\"%s\">\n",$page);
			printf ("<area shape=rect coords=\"96,10,171,31\" href=\"%s?catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"172,10,247,31\" href=\"%s?catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"324,10,399,31\" href=\"%s?catID=04\">\n",$page);
			printf ("<area shape=rect coords=\"400,10,475,31\" href=\"%s?catID=05\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_3.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "04":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"20,10,95,31\" href=\"%s\">\n",$page);
			printf ("<area shape=rect coords=\"96,10,171,31\" href=\"%s?catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"172,10,247,31\" href=\"%s?catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"248,10,323,31\" href=\"%s?catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"400,10,475,31\" href=\"%s?catID=05\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_4.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "05":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"20,10,95,31\" href=\"%s\">\n",$page);
			printf ("<area shape=rect coords=\"96,10,171,31\" href=\"%s?catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"172,10,247,31\" href=\"%s?catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"248,10,323,31\" href=\"%s?catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"324,10,399,31\" href=\"%s?catID=04\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_5.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		default:
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"96,10,171,31\" href=\"%s?catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"172,10,247,31\" href=\"%s?catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"248,10,323,31\" href=\"%s?catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"324,10,399,31\" href=\"%s?catID=04\">\n",$page);
			printf ("<area shape=rect coords=\"400,10,475,31\" href=\"%s?catID=05\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/tab_0.gif\" usemap=\"#tabs\" border=0>\n";
			break;
	}
?>
					</td>
