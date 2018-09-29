statusMsg = new Array();
	statusMsg[0] = "Return to The Plantage home page.";
	statusMsg[1] = "Sales and Marketing.";
	statusMsg[2] = "Plantage Information.";
	statusMsg[3] = "Resource Center.";
	
var statusNum;

function setStatus(statusNum)	{
	window.status = statusMsg[statusNum];
}

function clearStatus()	{
	window.status = document.location.href;
}
