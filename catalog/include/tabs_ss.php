					<td colspan="3" height="29" align="left" valign="top">
<?php
	switch ($catID)	{
		case "01":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"21,10,129,29\" href=\"%s?mode=SS\">\n",$page);
			printf ("<area shape=rect coords=\"185,10,247,29\" href=\"%s?mode=SS&catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"250,10,295,29\" href=\"%s?mode=SS&catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"300,10,378,29\" href=\"%s?mode=SS&catID=04\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/SSTab_1.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "02":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"21,10,129,29\" href=\"%s?mode=SS\">\n",$page);
			printf ("<area shape=rect coords=\"134,10,180,29\" href=\"%s?mode=SS&catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"250,10,295,29\" href=\"%s?mode=SS&catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"300,10,378,29\" href=\"%s?mode=SS&catID=04\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/SSTab_2.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "03":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"21,10,129,29\" href=\"%s?mode=SS\">\n",$page);
			printf ("<area shape=rect coords=\"134,10,180,29\" href=\"%s?mode=SS&catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"185,10,247,29\" href=\"%s?mode=SS&catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"300,10,378,29\" href=\"%s?mode=SS&catID=04\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/SSTab_3.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		case "04":
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"21,10,129,29\" href=\"%s?mode=SS\">\n",$page);
			printf ("<area shape=rect coords=\"134,10,180,29\" href=\"%s?mode=SS&catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"185,10,247,29\" href=\"%s?mode=SS&catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"250,10,295,29\" href=\"%s?mode=SS&catID=03\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/SSTab_4.gif\" usemap=\"#tabs\" border=0>\n";
			break;
		default:
			print "<map name=tabs>\n";
			printf ("<area shape=rect coords=\"134,10,180,29\" href=\"%s?mode=SS&catID=01\">\n",$page);
			printf ("<area shape=rect coords=\"185,10,247,29\" href=\"%s?mode=SS&catID=02\">\n",$page);
			printf ("<area shape=rect coords=\"250,10,295,29\" href=\"%s?mode=SS&catID=03\">\n",$page);
			printf ("<area shape=rect coords=\"300,10,378,29\" href=\"%s?mode=SS&catID=04\">\n",$page);
			print "</map>\n";
			print "<img src=\"images/SSTab_0.gif\" usemap=\"#tabs\" border=0>\n";
			break;
	}
?>
					</td>
