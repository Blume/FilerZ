<?php include("./ajax_php.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>FilerZ Datei Hosting</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./style/stylesheet.css" type="text/css" media="screen" />
	<link type='text/css' href='./modalbox/modalbox_style.css' rel='stylesheet' media='screen' />
	<script type="text/javascript">
	function ajax(uid) {
		var req;
	 	try {
			req = window.XMLHttpRequest?new XMLHttpRequest(): 
				new ActiveXObject("Microsoft.XMLHTTP"); 
		} catch (e) {
			alert("Dein Browser unterst&uuml;tzt kein AJAX!");
		}

		req.onreadystatechange = function() {
			if ((req.readyState == 4) && (req.status == 200)) { 
				document.getElementById("status").innerHTML = req.responseText;
			}
		}
		req.open('GET', 'status.php?uid='+uid);
		req.send(null);
	}
	</script>
	<script type="text/javascript" src="./ajax/js/ajax_json2.stringify.js"></script>
	<script type="text/javascript" src="./ajax/js/ajax_json_stringify.js"></script>
	<script type="text/javascript" src="./ajax/js/ajax_json_parse_state.js"></script>
	<script type="text/javascript" src="./ajax/js/ajax_sajax.js"></script>
	<script type="text/javascript"><?php sajax_show_javascript(); ?></script>
	<script type="text/javascript" src="./ajax_js.js"></script>
</head>
<body>

<div class="container">
	<div class="content" style="margin-left: 16px;">
		<img src="./style/logo.png" />
		<br /><br />
		<iframe src="upload.php" name="hidden_upload" style="display:none"></iframe>
		<div id="status"></div>
		<div>
			<form action="upload.php" target="hidden_upload" method="post" enctype="multipart/form-data">
				<input type="hidden" name="APC_UPLOAD_PROGRESS" value="<?php echo uniqid();?>"/>
				<input type="file" name="upload" />
				<input type="submit" onclick="this.disabled=true; setTimeout('ajax(\''+this.form.APC_UPLOAD_PROGRESS.value+'\')', 750); "/>
			</form>
		</div>
    </div>
</div>

<script type='text/javascript' src='./modalbox/modalbox_jquery.js'></script>
<script type='text/javascript' src='./modalbox/modalbox_jquery.simplemodal.js'></script>
<script type='text/javascript' src='./modalbox/modalbox_osx.js'></script>

</body>
</html>