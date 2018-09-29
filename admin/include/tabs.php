<?php
	$tabs = array();
	$tabs[0]["category"] = "catalogue";
	$tabs[1]["category"] = "headlines";
	$tabs[2]["category"] = "images";
	$tabs[3]["category"] = "accounts";

	switch ($category)	{
		case "headlines":
			$i = 1;
			break;
		case "images":
			$i = 2;
			break;
		case "accounts":
			$i = 3;
			break;
		case "catalogue":
		default:
			$i = 0;
			break;
	}

?>
			<table border="0" width="423" height="27" cellpadding="0" cellspacing="0">
				<tr>
					<td width="9">&nbsp;</td>
<?php
	foreach ($tabs as $key=>$tab) {
		$activeURL = "images/tab".$key."_1.gif";
		$inactiveURL = "images/tab".$key."_0.gif";
		echo "<td width=\"101\" height=\"27\" align=\"left\" valign=\"bottom\">";
		echo "<a href=\"".$self."?c=".$tab["category"]."\"><img src=\"";
		if ($key == $i)	{
			$url = $activeURL;
		}	else	{
			$url = $inactiveURL;
		}
		echo $url."\" width=\"101\" height=\"27\" border=\"0\" /></a></td>\n";
	}
?>
					<td width="10">&nbsp;</td>
				</tr>
			</table>