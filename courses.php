<?php

	$myFile = "courses.txt";	
	$fh = fopen($myFile, 'a') or die("can't open file");
	fwrite($fh,"[".$_POST['course']."]".PHP_EOL);
	fwrite($fh,"instr_name = ".$_POST['instr_name'].PHP_EOL);
	fwrite($fh,"title1 = ".$_POST['title1'].PHP_EOL);
	fwrite($fh,"publ1 = ".$_POST['publ1'].PHP_EOL);
	fwrite($fh,"edition1 = ".$_POST['edition1'].PHP_EOL);
	fwrite($fh,"date1 = ".$_POST['date1'].PHP_EOL);
	fwrite($fh,"title2 = ".$_POST['title2'].PHP_EOL);
	fwrite($fh,"publ2 = ".$_POST['publ2'].PHP_EOL);
	fwrite($fh,"edition2 = ".$_POST['edition2'].PHP_EOL);
	fwrite($fh,"date2 = ".$_POST['date2'].PHP_EOL);
	fwrite($fh, PHP_EOL);
	fclose($fh);

	
	$file_array = parse_ini_file($myFile, true);
	var_dump ($file_array);

?>