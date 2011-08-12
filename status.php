<?php
$arr = apc_fetch("upload_{$_GET['uid']}");
printf("<pre>%s</pre>", print_r($arr,true));
?>
