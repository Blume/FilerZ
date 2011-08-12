<?php
if(isset($_FILES['upload'])) {
	echo "Datei erfolgreich hochgeladen";
	move_uploaded_file($_FILES['upload']['tmp_name'], 'upload/' . $_FILES['upload']['name']);
}
?>
