<?php
	switch($dir)	{
		case "admin":
?>
<body onLoad="choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.php" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" /
		</div>
<?php
		break;
		case "catalog":
?>
<body onLoad="choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.php" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales-hover"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" />
		</div>
<?php
		break;
		case "info":
?>
<body onLoad="colorSet();choosePic();imageSet();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.php" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info-hover"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" />
		</div>
<?php
		break;
		case "resources":
			if ($sub == "articles")	{
?>
<body onLoad="colorSet();choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../../index.php" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales"><a href="../../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources-hover"><a href="../../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" />
		</div>
<?php
			}	else	{
?>
<body onLoad="colorSet();choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.php" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources-hover"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" />
		</div>
<?php
			}
		break;
		case "sales":
			if ($sub == "available.php")	{
?>
<body onLoad="colorSet(); choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.html" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales-hover"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
<?php
			}	else	{
?>
<body onLoad="colorSet();choosePic();">
	<div id="container">
		<div id="flag">
			<img src="../images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home"><a href="../index.html" onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales-hover"><a href="../sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="../info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="../resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
		<div id="sidebar">
			<img src="../images/1x1.gif" border="0" alt="" name="theImage" id="theImage" />
		</div>
<?php
		}
		break;
		default:
?>
<body onLoad="colorSet();choosePic();">
	<div id="container">
		<div id="flag">
			<img src="images/flag.jpg" border="0" height="72" width="670" name="theBanner" id="theBanner" alt="The Plantage Inc.: Perennials and Ornamental Grasses." />
		</div>
		<div id="navbar">
			<div class="home-hover"><a onmouseover="setStatus(0);" onmouseout="clearStatus();">Home</a></div>
			<div class="sales"><a href="sales/index.php" onmouseover="setStatus(1);" onmouseout="clearStatus();">Sales &amp; Marketing</a></div>
			<div class="info"><a href="info/index.php" onmouseover="setStatus(2);" onmouseout="clearStatus();">Information</a></div>
			<div class="resources"><a href="resources/index.php" onmouseover="setStatus(3);" onmouseout="clearStatus();">Resources</a></div>
		</div>
<?php
		break;
	}
?>
