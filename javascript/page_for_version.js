function page_for_version()	{
	var nav = navigator;
	var usrAgt = ' ' + nav.userAgent.toLowerCase();
	
	this.version = nav.appVersion;
	this.nn = usrAgt.indexOf ('mozilla') > 0;
	if (usrAgt.indexOf('compatible') > 0)	{
		this.nn = false;
	}
	
	if (this.ie && this.mac)	{
		if (usrAgt.indexOf("msie 5"))	{
			this.major = 5;
			var actual_index = usrAgt.indexOf("msie 5");
			var actual_major = usrAgt.substring(actual_index + 5, actual_index + 8);
			this.minor = parseFloat(actual_major);
		}
		
}

return this;