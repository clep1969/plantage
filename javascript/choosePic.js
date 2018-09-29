/*			CHOOSEPIC.JS
++			A script designed to display
++			a random image.
++			©1999 Tom Negrino and Dori Smith.
*/

		myPix = new Array ("../images/sidebars/sb_1.jpg","../images/sidebars/sb_2.jpg","../images/sidebars/sb_3.jpg","../images/sidebars/sb_4.jpg","../images/sidebars/sb_5.jpg","../images/sidebars/sb_6.jpg","../images/sidebars/sb_7.jpg","../images/sidebars/sb_8.jpg","../images/sidebars/sb_9.jpg","../images/sidebars/sb_10.jpg","../images/sidebars/sb_11.jpg","../images/sidebars/sb_12.jpg","../images/sidebars/sb_13.jpg","../images/sidebars/sb_14.jpg");

		imgCt = myPix.length;
		
		function choosePic()	{
			if (document.images)	{
				randomNum = Math.floor ((Math.random() * imgCt));
				document.theImage.src = myPix[randomNum];
			}
		}