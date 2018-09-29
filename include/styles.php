<?php
	if ($dir != "index.php")	{
		if ($sub == "resources" || $sub == "blooms")	{
			print "\t<link rel=\"stylesheet\" href=\"../../css/layout.css\" type=\"text/css\" />\n";
			print "\t<link rel=\"stylesheet\" href=\"../../css/plantage.css\" type=\"text/css\" />\n";
			print "\t<link rel=\"stylesheet\" href=\"../../css/lev_2.css\" type=\"text/css\" />\n";
			return;
		}	elseif ($sub == "orderform.php")	{
			print "\t<link rel=\"stylesheet\" href=\"../css/layout.css\" type=\"text/css\" />\n";
			print "\t<link rel=\"stylesheet\" href=\"css/oform.css\" type=\"text/css\" />\n";
			return;
		}	else	{
			print "\t<link rel=\"stylesheet\" href=\"../css/layout.css\" type=\"text/css\" />\n";
			print "\t<link rel=\"stylesheet\" href=\"../css/plantage.css\" type=\"text/css\" />\n";
			print "\t<link rel=\"stylesheet\" href=\"../css/lev_2.css\" type=\"text/css\" />\n";
			if ($dir == "catalog")	{
				print "\t<link rel=\"stylesheet\" href=\"css/catalog.css\" type=\"text/css\" />\n";
			}
		}
	}	else	{
?>
	<link rel="stylesheet" href="css/layout.css" type="text/css" />
	<link rel="stylesheet" href="css/plantage.css" type="text/css" />
<?php
	}
?>
