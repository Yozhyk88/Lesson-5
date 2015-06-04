<?php
	$textarea = $_POST ['textarea'];
	$text = $_POST ['text'];
	
	$fp = fopen("$text.txt", "w+");
	
	
	fwrite($fp, $textarea);
	
	
fclose($fp);
