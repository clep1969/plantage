		<div id="footer">
<?php
	/*
		This file will serve as the general purpose include file for the page footer. It is my hope that all pages will call this page before I'm done.
		
		What I need to do is:
		
		- Determine the (sub)directory from which the footer is being called, using explode().
	*/
	$path = explode("/", $page);
	$dir = $path[1];
		
	switch($dir)	{
		case "catalog":
			// Catalog footer
			if ($genID)	{
				switch ($mode)	{
					case "SS":
						printf ("<a href=\"%s?mode=SS&catID=%s\">Back to ", $page, $catID);
						switch ($catID)	{
							case "01":
								print "BULBS</a>&nbsp;|&nbsp;";
								break;
							case "02":
								print "GRASSES</a>&nbsp;|&nbsp;";
								break;
							case "03":
								print "HERBS</a>&nbsp;|&nbsp;";
								break;
							case "04":
								print "PERENNIALS</a>&nbsp;|&nbsp;";
								break;
						}
						break;
					default:
						printf ("<a href=\"%s?catID=%s\">Back to ", $page, $catID);
						switch ($catID)	{
							case "01":
								print "PERENNIALS</a>&nbsp;|&nbsp;";
								break;
							case "02":
								print "ORNAMENTAL GRASSES</a>&nbsp;|&nbsp;";
								break;
							case "03":
								print "SHRUBS</a>&nbsp;|&nbsp;";
								break;
							case "04":
								print "VINES</a>&nbsp;|&nbsp;";
								break;
							case "05":
								print "ROSES</a>&nbsp;|&nbsp;";
								break;
						}
						break;
				}
			}
			break;	// Close out the "catalog" case.
		case "sales":
			// Sales has its own switch block set up
			switch($ft)	{
				case "1":	// Availability List.
					print "<p class=\"smallText\" align=\"center\"><a href=\"javascript: window.close();\">Return to The Plantage's Web site</a></p>\n";
					break;
				case "2":	// Terms & Conditions.
					print "<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalog</a> | <a href=\"javascript: OpenContentWindow('available.php');\">Online Availability List</a> | <a href=\"../resources/index.php?content=2\">Links</a><br /><a href=\"../index.php\">Home</a> | <a href=\"index.php\">Sales &amp; Marketing</a> | <a href=\"../info/index.php\">Plantage Information</a> | <a href=\"../resources/index.php\">Resource Center</a><br />\n";
					break;
				default:	// Home Page.
					print "<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalog</a> | <a href=\"javascript: OpenContentWindow('available.php');\">Online Availability List</a> | <a href=\"../resources/index.php?content=2\">Links</a><br /><a href=\"../index.php\">Home</a> | Sales &amp; Marketing | <a href=\"../info/index.php\">Plantage Information</a> | <a href=\"../resources/index.php\">Resource Center</a><br />\n";
					break;
			}
			break;	// Close out the "sales" case.
		case "info":
			// Info has an if-then-else block that works nicely. We'll use that.
			if (isset($content))	{
				$url = "<a href=\"index.php\">Plantage Information</a>";
			}	else	{
				$url = "Plantage Information";
			}
			echo "<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalogue</a> | <a href=\"javascript: OpenContentWindow('available.php');\">Online Availability List</a> | <a href=\"../resources/index.php?content=2\">Links</a><br /><a href=\"../index.php\">Home</a> | <a href=\"../sales/index.php\">Sales &amp; Marketing</a> | " . $url . " | <a href=\"../resources/index.php\">Resource Center</a><br />\n";
			break;	// Close out the "info" case.
		case "resources":
			// Use the switch block for Resources here.
			if (isset($content))	{
				switch ($content)	{
					case "1":	// USDA Map.
						$url = "<a href=\"" . $page . "?content=2\">Links</a>";
						break;
					case "2":	// Links page.
						$url = "Links";
						break;
					default:	// Articles page.
						$url = "<a href=\"" . $page . "?content=2\">Links</a>";
						break;
				}
				echo "<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalogue</a> | <a href=\"javascript: OpenContentWindow('../sales/available.php');\">Online Availability List</a> | " . $url . "<br /><a href=\"../index.php\">Home</a> | <a href=\"../sales/index.php\">Sales &amp; Marketing</a> | <a href=\"../info/index.php\">Plantage Information</a> | <a href=\"index.php\">Resource Center</a><br />\n";
			}	else	{	// Home Page.
				echo "\t\t\t<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalog</a> | <a href=\"javascript: OpenContentWindow('../sales/available.php');\">Online Availability List</a> | <a href= \"" . $page . "?content=2\">Links</a><br /><a href=\"../index.php\">Home</a> | <a href=\"../sales/index.php\">Sales &amp; Marketing</a> | <a href=\"../info/index.php\">Plantage Information</a> | Resource Center<br />\n";
			}
			break;
		case "admin":
			echo "\t\t\t<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('../catalog/catalog.php');\">Browse Catalog</a> | <a href=\"javascript: OpenContentWindow('../sales/available.php');\">Online Availability List</a> | <a href=\"../resources/index.php?content=2\">Links</a><br /><a href=\"../index.php\">Home</a> | <a href=\"../sales/index.php\">Sales &amp; Marketing</a> | <a href=\"../info/index.php\">Plantage Information</a> | <a href=\"../resources/index.php\">Resource Center</a><br />\n";
			break;
		default:	// Root Home Page.
			echo "\t\t\t<p class=\"smallText\" align=\"center\"><a href=\"javascript: OpenContentWindow('catalog/catalog.php');\">Browse Catalog</a> | <a href=\"javascript: OpenContentWindow('sales/available.php');\">Online Availability List</a> | <a href=\"resources/index.php?content=2\">Links</a><br />Home | <a href=\"sales/index.php\">Sales &amp; Marketing</a> | <a href=\"info/index.php\">Plantage Information</a> | <a href=\"resources/index.php\">Resource Center</a><br />\n";
			break;
	}
?>
			<br />&copy;1997-<?= date("Y"); ?>, The Plantage, Inc. All rights reserved.<br />Web site design by <a href="mailto:chrislepore@mac.com?subject=Plantage%20Site%20Design">Chris Lepore</a> of Fireball Graphics.</p>
		</div>
