<?php
	#|	TABLES.CLASS.PHP
	#|	A class to help generate tables.
	#|	©2003 Christian Lepore.
	#|
	#|	PROPERTIES:
	#|	$border = the setting for the table border.
	#|	$pad = the setting for the table cellpadding.
	#|	$space = the setting for the table cellspacing.
	#|	$width = the setting for the table width.
	#|	$height = the setting for the table height.
	#|	$cols = the setting for column spans inside a table row.
	#|	$rows = the setting for row spans inside a table row.
	#|	$h = the setting for horizontal alignment of a table cell.
	#|	$v = the setting for vertical alignment of a table cell.
	#|	$cellwidth = the setting for the width of a table cell.
	#|	$cellheight = the setting for the height of a table cell.
	#|	$bgcolor = the setting for the table background color.
	#|
	#|	These properties can be set individually using their respective get
	#|	and set methods, or you can set them as a unit with the constructor
	#|	or the other public methods.
	#|
	#|	PUBLIC METHODS:
	#|	openTable() = opens a new table and the initial table row.
	#|	newCell() = opens a new cell with the arguments specified 
	#|		(cols, rows, height, width, align, valign).
	#|	changeCells() = closes the current cell calls newCell(). It takes
	#|		the same arguments as newCell().
	#|	changeRows() = closes the current cell and row and instantiates
	#|		a new row.
	#|	closeTable() = closes the current cell, row and table.
	#|
	#|	EXAMPLE:
	#|	include ("../lib/tables.class.php");
	#|
	#|	$foo = new Table;
	#|	$foo->setBorder("1");
	#|	$foo->setWidth("100%");
	#|	$foo->openTable();
	#|	$foo->newCell(1,1,'','','left','top');
	#|	echo "<p>Row 1, Cell 1<br />Rowspan = 1; Colspan = 1;</p>\n";
	#|	$foo->changeCells(1,1,'','50%','center','top');
	#|	echo "<p>Row 1, Cell 2<br />Width = 50%; Align = center</p>\n";
	#|	$foo->changeCells(1,2,'','','right','bottom');
	#|	echo "<p>Row 1, Cell 3<br />Rowspan = 2; Align = right; Valign = bottom</p>\n";
	#|	$foo->changeRows();
	#|	$foo->newCell(1,1,'','','center','bottom');
	#|	echo "<p>Row 2, Cell 1<br />Align = center; Valign = bottom</p>\n";
	#|	$foo->changeCells(1,1,'50%','','left','middle');
	#|	echo "<p>Row 2, Cell 2<br />Height = 50%; Valign = middle</p>\n";
	#|	$foo->closeTable();
	#|
	
	class Table	{
		var $border;
		var $pad;
		var $space;
		var $width;
		var $height;
		var $cols;
		var $rows;
		var $h;
		var $v;
		var $cellwidth;
		var $cellheight;
		var $bgcolor;
		
		//	Get and set variable functions.
		
		function getBorder()	{
			return $this->border;
		}
			
		function setBorder($border)	{
			$this->border = $border;
		}
			
		function getPad()	{
			return $this->pad;
		}
			
		function setPad($pad)	{
			$this->pad = $pad;
		}
			
		function getSpace()	{
			return $this->space;
		}
			
		function setSpace($space)	{
			$this->space = $space;
		}
			
		function getWidth()	{
			return $this->width;
		}
			
		function setWidth($width)	{
			$this->width = $width;
		}
			
		function getHeight()	{
			return $this->height;
		}
			
		function setHeight($height)	{
			$this->height = $height;
		}
			
		function getCols()	{
			return $this->cols;
		}
			
		function setCols($cols)	{
			$this->cols = $cols;
		}
			
		function getRows()	{
			return $this->rows;
		}
			
		function setRows($rows)	{
			$this->rows = $rows;
		}
			
		function getH()	{
			return $this->h;
		}
			
		function setH($h)	{
			$this->h = $h;
		}
			
		function getV()	{
			return $this->v;
		}
			
		function setV($v)	{
			$this->v = $v;
		}

		function getCellWidth()	{
			return $this->cellwidth;
		}

		function setCellWidth($width)	{
			$this->cellwidth = $width;
		}

		function getCellHeight()	{
			return $this->cellheight;
		}

		function setCellHeight($height)	{
			$this->cellheight = $height;
		}

		function getBGColor()	{
			return $this->bgcolor;
		}
		
		function setBGColor($color)	{
			$this->bgcolor = $color;
		}

		// Constructor			
		function Table()	{
			$this->setBorder('0');
			$this->setPad('5');
			$this->setSpace('0');
			$this->setWidth('');
			$this->setHeight('');
			$this->setCols('1');
			$this->setRows('1');
			$this->setH('left');
			$this->setV('top');
			$this->setCellWidth('');
			$this->setCellHeight('');
			$this->setBGColor('');
		}
		
		function openTable()	{
			echo "<table ";
			echo "border=\"".$this->border."\" cellpadding=\"".$this->pad."\" cellspacing=\"".$this->space."\"";
			if (!empty($this->width)) echo " width=\"".$this->width."\"";
			if (!empty($this->height)) echo " height=\"".$this->height."\"";
			if (!empty($this->bgcolor)) echo " bgcolor=\"".$this->bgcolor."\"";
			echo ">\n";
			echo "\t<tr>\n";
		}
		
		function newCell($cols,$rows,$height,$width,$H,$V)	{
			$this->setCols($cols);
			$this->setRows($rows);
			$this->setCellHeight($height);
			$this->setCellWidth($width);
			$this->setH($H);
			$this->setV($V);
			echo "\t\t<td";
			if ($cols > 1) echo " colspan=\"" . $this->cols . "\"";
			if (($cols == 1) AND (!empty($width))) echo " width=\"".$this->cellwidth."\"";
			if ($rows > 1) echo " rowspan=\"" . $this->rows . "\"";
			if (($rows == 1) AND (!empty($height))) echo " height=\"".$this->cellheight."\"";
			echo " align=\"".$this->h."\" valign=\"".$this->v."\">\n";
		}
		
		function changeCells($cols,$rows,$height,$width,$H,$V)	{
			echo "\n\t\t</td>\n";
			$this->newCell($cols,$rows,$height,$width,$H,$V);
		}
		
		function changeRows()	{
			echo "\n\t\t</td>\n\t</tr>\n\t<tr>\n";
		}
		
		function closeTable()	{
			echo "\n\t\t</td>\n";
			echo "\t</tr>\n";
			echo "</table>\n";
		}
	}
?>
