				<tr><?php # Footer goes in here. ?>
					<td colspan="3" align="center" valign="bottom">
						<p class="smallText" align="center">
						<?php
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
						?>
						<a href="catalog.php">Catalogue Intro</a> | <a href="javascript: window.close();">Return to The Plantage Web Site</a><br>&copy;2002 The Plantage, Inc., unless otherwise noted. All rights reserved.<br>Web site design by <a href="mailto: chrislepore@mac.com">Christian Lepore</a> of Fireball Graphics.</p>
					</td>
				</tr><?php # End footer. ?>
