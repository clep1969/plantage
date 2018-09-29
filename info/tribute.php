<?php
	$trib = $HTTP_GET_VARS["trib"];
?>

<table width="459" border="0" cellpadding="5" cellspacing="0">
	<tr>
		<td colspan="3" align="center" valign="top">
			<h1>Industry Insiders Pay Homage to Lois Woodhull</h1>
			<p><i>Those who would like to contribute to our to our tribute page may send their submissions to <a href="mailto:jcroon@plantage.com?subject=Woodhull%20Tribute">jcroon@plantage.com</a> for review.</i></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" width="50">
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=bush\">" ?>Allen Bush, Jelitto</a></p>
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=cross\">" ?>Connie Cross, Environmentals</a></p>
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=freeman\">" ?>Ralph Freeman, Cornell Cooperative</a></p> 
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=ogden\">" ?>Judy Ogden, Ogden Design</a></p>
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=still\">" ?>Steven Still, PPA News</a></p>
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=talmage\">" ?>Ellen Talmage, Talmage Farm</a></p>
			<p class="smallText"><?= "<a href=\"" . $page . "?content=7&trib=stewart\">" ?>Martha Stewart</a></p>
		</td>
		<td width="20">&nbsp;</td>
		<td align="left" valign="top" width="*">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td align="right" valign="bottom"><img src="images/table_tl.gif" border="0"></td>
					<td bgcolor="#CCCC99">&nbsp;</td>
					<td align="left" valign="bottom"><img src="images/table_tr.gif" border="0"></td>
				</tr>
				<tr>
					<td bgcolor="#CCCC99">&nbsp;</td>
					<td align="left" valign="top" bgcolor="#CCCC99">
			<?php
				if (isset($trib))	{
					switch ($trib)	{
						case "still":
						print "<p class=\"quote\">&quot;Lois Woodhull was one of the early members of the Perennial Plant Association Board of Directors. She worked diligently in all she undertook. She developed her nursery, The Plantage, into a first-class source for many perennials such as Festuca glauca 'Elijah Blue,' which won an award in 1996 for outstanding introductions from the International Staudenunion. Her tenure on the PPA Board was very active and influential, as she helped write policies we use today. She will be sorely missed by the Perennial Plant Association and in plant circles all over the world.&quot;</p>\n";
						print "<p class=\"attrib\">Steven Still, PPA News</p>\n";
						break;

						case "cross":
						print "<p class=\"quote\">&quot;Lois Woodhull was a woman who was not afraid to take risks, speak her mind, or take on new challenges. Because of her gutsy ways and spiritual faith, we are lucky to have The Plantage. It is sad that Lois had to leave so soon. True grit must run in the family. Lois would be absolutely amazed and proud of June, who has continued to provide innovative ideas to our industry, along with a diversity of wonderfully grown plants of the highest quality.&quot;</p>\n";
						print "<p class=\"attrib\">Connie Cross, Environmentals, Cutchogue, NY</p>\n";
						break;

						case "talmage":
						print "<p class=\"quote\">&quot;When I first considered going into the wholesale perennial business, it quickly became apparent that I would be a follower. Although the horticulture perennial industry was in its infancy as a whole, I traveled down a path already blazed by a certain Lois Woodhull, founder of The Plantage.</p>\n<p class=\"quote\">&quot;Winning the trust of this mysterious perennial woman of Cutchogue was no easy task. I heard through various people in the industry that Lois was a tough businesswoman who worked hard, and really knew her plants. I remember the first time I heard Lois laugh; it was when I went to The Plantage to pick up an order that I was going to deliver for onw of our mutual customers. I drove up in a beat up step van that died right in the entrance of The Plantage so that no trucks or cars could move in or out. She came over herself to see if she could assist. I heard her cackle when she realized that the sliding door of my van wouldn't open so she had to pry me out of the driver's seat before I could call to get towed home from her driveway.</p>\n<p class=\"quote\">&quot;Once I was privileged to hear that laugh, things got better. After a while I would get phone calls from Lois just so she would ask my opinion on some business decision she was thinking about making. I never felt more honored. I had won her respect not only as a competitor, but as a colleague. There have very few achievements that I have valued more. We started working together with the Perennial Plant Association and even a fun but short-lived perennial association we started on Long Island called LIPS (Long Island Perennial Society).</p>\n<p class=\"quote\">&quot;Remember, this friendship came after countless dreams I had about the Plantage Nursery, where the place looked even better that &quot;OZ&quot;, full of poppies, no weeds or insects, a clientele that I would give my right arm for.</p>\n<p class=\"quote\">&quot;I never knew her to talk about her private life, which included her health, so respecting our relationship I never asked. Throughout all her battles with illness she never lost her sharp mind for plants or business. From Lois, I would expect nothing less. ... I was honored to be asked to write such a testimonial and hope everyone who reads this gets a chance to reflect on how one person can do so much for this world.&quot;</p>\n";
						print "<p class=\"attrib\">Ellen Talmage, Talmage Farm, Riverhead, NY</p>\n";
						break;

						case "ogden":
						print "<p class=\"quote\">&quot;... [H]er business has impeccable quality material, but perhaps even more valuable are the species and varieties they choose to grow. They select plants which are unusual and different, while making sure that their growth is vigorous and robust. I have always looked upon their operation as a place to learn from.  When I go there to purchase plant material, I would always allow time to walk through  the aisles between the hoop houses and find new plants, confidently I would buy a few to trial at my home, knowing that they would not be there if Lois didn't believe they were outstanding in the landscape.&quot;</p>\n";
						print "<p class=\"attrib\">Judy Ogden, Ogden Design, Port Jefferson, NY</p>\n";
						break;
						
						case "freeman":
						print "<p class=\"quote\">&quot;There is no question about Lois Woodhull being a leader. She began her business in the late '60s on a shoestring and in a short time became very successful. In those days it wasn’t 'stylish' for a woman to be a business owner, and many wondered if she would make it. She did make it as a result of her perseverance, endurance, promoter and love for plants. Lois was not only a business owner but had interests in producing a crop (perennials) that was not in vogue during those early years. Additionally, she introduced many crops and trends becoming very popular. Today, which crop is among those with most sales and most popular? It's nothing but perennials! Lois, thank you for your insights.&quot;</p>\n";
						print "<p class=\"attrib\">Ralph Freeman, Cornell Cooperative Extension (Retired)</p>\n";
						break;
						
						case "bush":
						print "<p class=\"quote\">&quot;Lois didn't often make the rounds at the annual meetings. Yet she was always a welcome addition to the &quot;Big Tent&quot; atmosphere of yearly nomadic gatherings like the Perennial Plant Association symposia. Instead, she would stay behind and stick to the business of growing great plants and riding horses. Horses? To some of us whose lives were all about trying to grow great plants, it was surprising that there was a world beyond horticulture.&quot;</p>\n";
						print "<p class=\"attrib\">Allen Bush, Jelitto</p>\n";
						break;
						
						case "stewart":
						print "<p class=\"quote\">&quot;Lois Woodhull Of The Plantage, in Matituck, Long Island, was famous for her beautifully grown perennials &#151; and  the company she founded is still the source for many of the wonderful cultivars that thrive in gardens in and around New York and Connecticut.&quot;</p>\n";
						print "<p class=\"attrib\">Martha Stewart</p>\n";
						break;
					}
				}	else	{
#					default:
					print "<p>Lois Woodhull had what all of us drawn to the horticulture business have. That spiritual connection to the living world around us. We all have that connection when we look at plants. We seem to see more than the average person. There is a deep appreciation for the intricacies and inestimable beauty of a plant, or flower. That deep admiration and the desire to share it with others is what The Plantage was founded on.</p>\n<p>Lois Woodhull had that desire coupled with determination and vision. Traits that took a homegrown idea and turned it into a profitable business and revolutionized an industry.</p>\n<p>Please take a fond look back at the woman whose tenacity helped shape our world, with tributes from those whose names you'll surely recognize, who knew her well.</p>\n";
#					break;
				}
			?>
					</td>
					<td bgcolor="#CCCC99">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" valign="top"><img src="images/table_ll.gif" border="0"></td>
					<td bgcolor="#CCCC99">&nbsp;</td>
					<td align="left" valign="top"><img src="images/table_lr.gif" border="0"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
