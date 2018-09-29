<?php
	if (isset($content))	{
		include ("terms.php");
	}	else	{
?>
		<div id="col1">
			<h1>Online Catalogue</h1>
			<p><a href="javascript: OpenContentWindow('../catalog/catalog.php');">Take a look</a> at our current lineup&#151;perennials, grasses, shrubs and vines.</p>
			<p><a href="javascript: OpenContentWindow('../catalog/startups.php');">Sunny Startups&#153;</a>&#151;Ready-to-plant specialities for the retail user.</p>
			<h1>Doing Business With The Plantage</h1>
			<p>Plant sales are WHOLESALE ONLY, to garden centers, landscape architects and designers, landscapers, and non-profit organizations. Make sure you <?= "<a href=\"" . $page . "?content=1\">"?> read our terms and conditions</a> carefuly before placing your order.</p>
		</div>
		<div id="col2">
			<h1>Availability List</h1>
			<p><a href="javascript: OpenContentWindow('available.php');">Availability lists</a> are posted weekly from late March to early November. If current availability lists are not available, please refer to our catalogue.</p>
			<img src="../images/sales_pic.jpg" border="1" alt="" />
		</div>	<!--
			<table summary="Sales and Marketing." width="558" height="300" border="0" cellpadding="5" cellspacing="10">
				<tr>
					<td width="248" align="left" valign="top">
						<h1>Online Catalogue</h1>
						<p><a href="javascript: OpenContentWindow('../catalog/catalog.php');">Take a look at our 2002 lineup&#151;perennials, grasses, shrubs and vines.</a></p>
						<p><a href="javascript: OpenContentWindow('../catalog/startups.php');">New for 2002! Sunny Startups&#153;</a></p>
					</td>
					<td width="300" align="left" valign="top">
						<h1>Availability List</h1>
						<p><a href="javascript: OpenContentWindow('available.php');">Availability lists</a> are posted weekly from late March to early November. If current availability lists are not available, please refer to our catalogue.</p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">
						<h1>Doing Business With The Plantage</h1>
						<p>Plant sales are WHOLESALE ONLY, to garden centers, landscape architects and designers, landscapers, and non-profit organizations. Make sure you <?= "<a href=\"" . $page . "?content=1\">"?> read our terms and conditions</a> carefuly before placing your order.</p>
					</td>
					<td align="right" valign="top"><img src="../images/sales_pic.jpg" border="1" alt="" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="bottom">
-->
<?php
	#	print "			</td>\n";
	#	print "		</tr>\n";
	#	print "	</table>\n";
	}
?>
