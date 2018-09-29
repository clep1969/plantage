function OpenContentWindow(contentURL)	{
	contentWindow = window.open(contentURL,'Content','height=600, width=800, scrollbars=yes, toolbar=yes, status=yes, location=yes');
	contentWindow.focus();
}