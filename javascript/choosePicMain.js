/*			CHOOSEPICMAIN.JS
++			A script designed to display
++			a random image.
++			©1999 Tom Negrino and Dori Smith.
*/

		var theImage;
		
		myPix = new Array ("images/rotate/img1.jpg","images/rotate/img2.jpg","images/rotate/img3.jpg","images/rotate/img4.jpg","images/rotate/img5.jpg");

		imgCt = myPix.length;
		
		function choosePic()	{
			if (document.images)	{
				randomNum = Math.floor ((Math.random() * imgCt));
				document.theImage.src = myPix[randomNum];
			}
		}
