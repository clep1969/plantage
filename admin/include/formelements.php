<?php
	class form_element	{
		var $element = array("input","select","option","textarea");
		var $name;
		var $type = array ("text","password","checkbox","radio","submit","reset");
		var $flags = array (null,"checked","selected");
		var $cols;
		var $rows;
		var $size;
		var $value;
		
		function form_element ($input,$type,$name,$value = null,$size = null,$flags = null)	{
			echo "<".$this->element[$input]." type=\"".$this->type[$type]."\" name=\"".$name."\"";
			if ($flags)	{
				$flags = $this->flags[$flags];
				echo " ".$flags;
			}
			if ($size)	{
				$this->size = $size;
				echo " size=\"".$size."\"";
			}
			if ($value)	{
				$this->value = $value;
				echo " value=\"".$value."\"";
			}
			echo " />";
		}
	}
?>
<?php
	echo "<form>\n<p><b>Plant Genus:</b>&nbsp;";
	$gID = new form_element (0,0,"plantGenus",$value=null,$size="25");
	echo "</p>\n<p><b>Common Name:</b>&nbsp;";
	$pgen = new form_element (0,0,"commonName",$value=null,$size="25");
	echo "</p>\n";
	$sub = new form_element (0,4,"submit",$value="Enter");
	echo "&nbsp;";
	$reset = new form_element (0,5,"reset",$value="Clear Form");
	echo "<br />\n</form>\n";
?>