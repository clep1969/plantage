<?php
	switch($dir)	{
		case "admin":
?>
	<script src="../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
<?php
		break;
		case "catalog":
?>
	<script src="../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script language="javascript" type="text/javascript">
		function OpenDetail (URL)	{
				window.open (URL,'Detail','width=660,height=530,scrollbars=no,status=no,toolbar=no,location=no');
				// window.focus();
			}
	</script>
<?php
		break;
		case "info":
?>
	<script src="../javascript/seasonSwap.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/newWindow.js" language="javascript" type="text/javascript"> </script>
	<script src="javascript/imageSwap.js" language="javascript" type="text/javascript"> </script>
<?php
		break;
		case "resources":
			if ($sub == "articles")	{
?>
	<script src="../../javascript/seasonSwap.js" language="javascript" type="text/javascript"> </script>
	<script src="../../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script src="../../javascript/newWindow.js" language="javascript" type="text/javascript"> </script>
<?php
			}	else	{
?>
	<script src="../javascript/seasonSwap.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/newWindow.js" language="javascript" type="text/javascript"> </script>
<?php
			}
		break;
		case "sales":
?>
	<script src="../javascript/seasonSwap.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/choosePic.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script src="../javascript/newWindow.js" language="javascript" type="text/javascript"> </script>
<?php
		break;
		default:
?>
	<script src="javascript/seasonSwap.js" language="javascript" type="text/javascript"> </script>
	<script src="javascript/choosePicMain.js" language="javascript" type="text/javascript"> </script>
	<script src="javascript/windowStatus.js" language="javascript" type="text/javascript"> </script>
	<script src="javascript/newWindow.js" language="javascript" type="text/javascript"> </script>
<?php
		break;
	}
?>
