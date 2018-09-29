/*		VERSCTRL.JS
**		Determines the browser make and version
**		and directs the user to the appropriate
**		pages.
**		©2001 Chris Lepore
**		(portions ©2000 Jason Cranford Teague) */


var isLayers = 0;
var isAll = 0;
var isOld = 0;
var startHref = document.location.href;

if	(document.layers)	{
	isLayers = 1;
	}
else if (document.all)	{
		isAll = 1;
		}
else	{
	isOld = 1;
	}

function reDirect()	{
	if ((isLayers == 1) || (isAll == 1))	{
		startHref = "index.html";
		}
	else	{
		startHref = "old/default.htm";
		}
	}
	
	
/*	This is some DOM-related stuff that is not
**	currently implemented but that I want to
**	keep around for when I need it.

var dom;
var docObj
var styleObj;

if (isLayers)	{
	docObj = 'document';
	styleObj = '';
	}
	
if (isAll)	{
	docObj = 'document.all';
	styleObj = '.style';
	}
	
*/