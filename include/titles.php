<?php
	switch ($dir)	{
		case "catalog":
			if (isset($mode) == "SS")	{
				$Title = "The Plantage, Inc. &#151; Sunny Startups&#153; " . date("Y");
			}	else	{
				$Title = "The Plantage, Inc. &#151; Spring " . date("Y") . " Catalogue";
			}
			break;
		case "info":
			if (isset($content))	{
				switch ($content)	{
					case "1":	// News.html
					$Title = "The Plantage, Inc. &#151; Latest News";
					break;
					case "2":	// Contact.html
					$Title = "Contact The Plantage!";
					break;
					case "3":	// Mailtos.html
					$Title = "The Plantage, Inc. &#151; Drop Us a Line ... On-Line!";
					break;
					case "4":	// Mission.html
					$Title = "The Plantage, Inc. &#151; Our Mission Statement";
					break;
					case "5":	// Who's Who.html
					$Title = "Who's Who at The Plantage?";
					break;
					case "6":	// Woodhull.html
					$Title = "Lois Woodhull &#151; 1942-1997";
					break;
					case "7":	// Tribute.html
					$Title = "The Nursery Industry Pays Tribute to Lois Woodhull";
					break;
				}
			}	else	{	// default
				$Title = "The Plantage, Inc. &#151; Information Center";
			}
			break;
		case "resources":
			if (isset($content))	{
				switch ($content)	{
					case "1":	// usdamap.html
					$Title = "USDA Plant Hardiness Zone Map";
					break;
					case "2":	// links.html
					$Title = "Links to Perennial Sources On-Line";
					break;
					case "3":	// articles.html
					if (isset($article))	{
						switch ($article)	{
							case "1":
							$Title = "Extend Your Season With Late-Blooming Perennials";
							break;
							case "2":
							$Title = "How to Plant a Rock Garden";
							break;
							case "3":
							$Title = "Pick the Best Alpine Shrubs for Rock Gardens";
							break;
							case "4":
							$Title = "Selecting the Best Alpines for Your Garden";
							break;
						}
					}	else	{
						$Title = "Helpful Horticultural Articles";
					}
					break;
				}
			}	else	{	// default
				$Title = "The Plantage, Inc. &#151; Resource Center";
			}
			break;
		case "sales":
			if (isset($content))	{
				switch ($content)	{
					case "1":	// terms.php
					$Title = "The Plantage, Inc. &#151; Terms and Conditions of Sale";
					break;
				}
			}	else	{	// default:
				$Title = "The Plantage, Inc. &#151; Sales &amp; Marketing";
			}
			break;
		default:
			$Title = "The Plantage, Inc. &#151; Perennials and Ornamental Grasses";
			break;
	}
?>
