//	ARRAYS:

	myPix = new Array("images/rotate/img1.jpg","images/rotate/img2.jpg","images/rotate/img3.jpg","images/rotate/img4.jpg","images/rotate/img5.jpg");

	statusMsg = new Array("Return to The Plantage home page.","Sales and Marketing.","Plantage Information.","Resource Center.");
		
	theColor = new Array("#FFFFFF","#CCFF99","#FFFFCC","#999966");


//	VARIABLES:

	var theImage = new Image();
	var imgCt = myPix.length;
	var randomNum = Math.floor ((Math.random() * imgCt));
	var statusNum;		
	var rightnow = new Date();
	var thisMonth = rightnow.getMonth();
	var theSeason = Math.round(thisMonth / 3);
	var isLayers = 0;
	var isAll = 0;
	var isID = 0;
	var isOld = 0;
	var startHref = document.location.href;
	var dom;
	var docObj;
	var styleObj;
		
	
//	FUNCTIONS:
	
	function choosePic()	{
		if (document.images)	{
			randomNum = Math.floor ((Math.random() * imgCt));
		}
	}
	
	function clearStatus()	{
		window.status = document.location.href;
	}

	function colorSet()		{
		if (document.images)	{
			document.bgColor = theColor[theSeason];
		}
	}
	
	function determineDOM()	{
		if	(document.layers)	{
			isLayers = 1;
			}
		else if	(document.all)	{
			isAll = 1;
			}
		else	if	(document.id)	{
			isID = 1;
			}
		else	{
			isOld = 1;
			}
			
		if	(isLayers)	{
			docObj = 'document';
			styleObj = '';
			}
		if	(isAll)	{
			docObj = 'document.all';
			styleObj = '.style';
			}
		}
		}

	function reDirect()	{
		if (isOld != 1)	{
			startHref = "index.html";
			}
		else	{
			startHref = "old/default.htm";
			}
		}

	function setStatus(statusNum)	{
		document.window.status = statusMsg[statusNum];
	}