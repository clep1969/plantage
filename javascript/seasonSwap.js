/*	SEASONSWAP.JS
-	A Quick and dirty JavaScript
-	18 months in the making :)
-	that changes the background color
-	based on the changing seasons.
-	Cool, eh?
-	©2001 Christian Lepore.
-	LIKE THIS SCRIPT?
-	You can use it provided you keep this header intact.
-	Thanks!
*/

//	First let's set up an arrays to hold the data we want to switch.
//	Change my values to the values you want to use.

	theColor = new Array();
		theColor[0] = "#FFFFFF";
		theColor[1] = "#99FF66";
		theColor[2] = "#FFFFCC";
		theColor[3] = "#999966";
		
	theLinkColor = new Array();
		theLinkColor[0] = "#006600";
		theLinkColor[1] = "#006600";
		theLinkColor[2] = "#006600";
		theLinkColor[3] = "#CC6600";
		
//	Then we'll declare some variables:

	var rightnow = new Date();
	var thisMonth = rightnow.getMonth();
	var theSeason = Math.round(thisMonth / 3);
		
//	And here's where we work our magic:
	
	function colorSet()		{
		if (document.images)	{
			//*** change background color
			document.bgColor = theColor[theSeason];
			//*** change link color
			document.linkColor = theLinkColor[theSeason];
		}
	}
