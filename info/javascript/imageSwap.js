/*	SEASONSWAP.JS
-	A Quick and dirty JavaScript
-	18 months in the making :)
-	that changes set image files
-	based on the changing seasons.
-	Cool, eh?
-	©2001 Christian Lepore.
-	LIKE THIS SCRIPT?
-	You can use it provided you keep this header intact.
-	Thanks!
*/

//	First let's set up an array to hold the data we want to switch.
//	Change my values to the values you want to use.

	if (document.images)	{
		theImg = new Array();
			theImg[0] = "images/lois_0.jpg";
			theImg[1] = "images/lois_1.jpg";
			theImg[2] = "images/lois_2.jpg";
			theImg[3] = "images/lois_3.jpg";

		imgCt = theImg.length;
	}
	
//	Then we'll declare some variables:

	var rightnow = new Date();
	var thisMonth = rightnow.getMonth();
	var theSeason = Math.round(thisMonth / 3);
	var thePicture;  // make sure this name matches the "name" id for your image
		
//	And here's where we work our magic:
	
	function imageSet()	{
		if (document.images)	{
			document.thePicture.src = theImg[theSeason];
		}
	}
