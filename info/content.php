<?php
	if (isset($content))	{
		switch ($content)	{
			case "1":
			include ("../include/constants.php");
			include ("news/news.php");
			break;
	
			case "2":
			include ("contact.html");
			break;

			case "3":
			include ("mailtos.html");
			break;

			case "4":
			include ("mission.html");
			break;

			case "5":
			include ("whoswho.html");
			break;

			case "6":
			include ("woodhull.html");
			break;

			case "7":
			include ("tribute.php");
			break;
		}
	}	else	{
?>
			<div id="col1">
				<h1>Latest Company News</h1>
				<p><?= "<a href=\"" . $page . "?content=1\">Our latest headlines</a></p>\n" ?>
				<h1>Our Mission</h1>
				<p><?= "<a href=\"" . $page . "?content=4\">Click here</a> to see what we expect from ourselves, and what you can expect of us.</p>\n" ?>
				<h1>Our History</h1>
				<p>Find out about our founder, <?= "<a href=\"" . $page . "?content=6\">Lois. F. Woodhull,</a> and read <a href=\"$page?content=7\">tributes</a> to Lois from noted members of our industry.</p>\n" ?>
			</div>
			<div id="col2">
				<h1>Get In Touch With The Plantage</h1>
				<ul>
					<li><?= "<a href=\"" . $page . "?content=2\">Phone, fax and postal addresses</a></li>\n" ?>
					<li><?= "<a href=\"" . $page . "?content=3\">Email addresses</a></li>\n" ?>
				</ul>
				<h1>Who's Who at The Plantage</h1>
				<p><?= "<a href=\"" . $page . "?content=5\">Check out</a> our current roster!</p>\n" ?>
				<img src="../images/hort_chicks.jpg" border="1" alt="The team at The Plantage is just waiting to go to work for you!" />
			</div>
<?php
	}
?>
