<?php
	
	if (isset($content))	{
		switch ($content)	{
			case "1":
			include ("usdamap.html");
			break;

			case "2":
			include ("links.html");
			break;
			
			case "3":
			$article = $_GET["article"];
			include ("articles/articles.php");
			break;

			case "4":
			include ("noteworthy.html");
			break;

			case "5":
			include ("wetfeet.html");
			break;

			case "6":
			include ("shadeplants.html");
			break;

			case "7":
			include ("wherefind.html");
			break;
		}
	}	else	{
?>
		<div id="col1">
			<h1>USDA Hardiness Map</h1>
			<p>Are you stocking plants <?= "<a href=\"" . $page . "?content=1\">" ?>appropriate to your zone?</a></p>
			<h1>Special Climates Deserve Special Perennials</h1>
			<p>Check out these lists for just the right plant for your ecosystem!</p>
			<ul>
				<li><?= "<a href=\"" . $page . "?content=5\">" ?>Popular perennials that love wet feet</a></li>
				<li><?= "<a href=\"" . $page . "?content=6\">" ?>Great Shade Plants</a></li>
			</ul>
			<h1>Links</h1>
			<p><?= "<a href=\"" . $page . "?content=2\">" ?>Take a look</a> at some of our best clients and great gardening resources on the Web.</p>
			<h1>Where to Find Plantage Plants?</h1>
			<p><?= "<a href=\"" . $page . "?content=7\">" ?>Click here</a> to learn where you can find our perennials at a garden center near you.</p>
		</div>
		<div id="col2">
			<h1>Garden Articles</h1>
			<p><?= "<a href=\"" . $page . "?content=3\">" ?>Read informative articles</a> by staff members that will help you help your customers.</p>
			<h1>News and Noteworthies</h1>
			<p>Popular gardening magazines produce <?= "<a href=\"" . $page . "?content=4\">" ?>articles</a> highlighting many of the plants we sell! Great gardening/landscaping ideas.</p>
			<img src="../images/res_pic.jpg" border="1" alt="">
		</div>
<?php
	}
?>
