<?php
	#|	IMAGES.PHP
	#|
	#|	switch ($category)	{
	#|		[snip]
	#|		case "images":
				switch ($editMode)	{
					case "add":
						$uploaddir = "/Library/Apache2/htdocs/catalog/";
						$newName = $_POST["newName"];

						if ($submit)	{
							(ereg("$_ls.jpg",$_FILES['plantPic']['name'])) ? $uploaddir .= "loRez/" : $uploaddir .= "hiRez/";
							$_FILES['plantPic']['name'] = $newName;
							if (move_uploaded_file($_FILES['plantPic']['tmp_name'],$uploaddir . $_FILES['plantPic']['name']))	{
								print "File is valid, and was successfully uploaded.\n";
							}	else	{
								print "Possible file upload attack! Here's some debugging info:\n";
								print "<pre>\n";
								print_r($_FILES);
								print "</pre>\n";
							}
						}	else	{
?>
	<form enctype="multipart/form-data" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="80800" />
		<p><b>Image to upload:</b>&nbsp;<input name="plantPic" type="file"></p>
		<p><b>Name of image:</b>&nbsp;<input name="newName" size="25" max="50" /></p>
		<input type="submit" name="submit" value="Add Image" />
	</form>
<?php
						}
						//	add images here
						break;
					case "edit":
						//	edit images here
						break;
					case "resize":
						//	resize images here
						break;
					case "delete":
						//	delete images here
						break;
					default:
						include ("default.php");
						break;
				}
	#|		[snip]
	#|	}
?>