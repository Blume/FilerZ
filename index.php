<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>FilerZ Datei Hosting</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./style/stylesheet.css" type="text/css" media="screen" />
</head>
<body>

<div class="container">
	<div class="content" style="margin-left: 16px;">
		<img src="./style/logo.png" />
		<br /><br />
		<div>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label for="inputFile">Datei</label>
				<input name="inputFile" type="file" size="50" maxlength="100000" accept="*"><br /><br />
				<input type="submit" value="Hochladen" />
			</form>
		</div>
    </div>
</div>

</body>
</html>