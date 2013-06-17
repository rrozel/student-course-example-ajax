<?php

	$myFile = "students.txt";	
	$coursesFile = "courses.txt";
	
	$write = FALSE;
	if ($_POST['write'] == "true")
	{
		$write = TRUE;
	}
	
	$courses = parse_ini_file($coursesFile, true);
	
	$flag1 = FALSE;
	$flag2 = FALSE;
	if (isset($courses[$_POST['course']]))
	{
		if ($courses[$_POST['course']]['title1'] == $_POST['title1'])
		{
			if ($courses[$_POST['course']]['publ1'] == $_POST['publ1'])
			{
				if ($courses[$_POST['course']]['edition1'] == $_POST['edition1'])
				{
					if ($courses[$_POST['course']]['date1'] == $_POST['date1'])
					{
						$flag1 = TRUE;
					}
				}
			}
		}
		else if ($courses[$_POST['course']]['title1'] == $_POST['title2'])
		{
			if ($courses[$_POST['course']]['publ1'] == $_POST['publ2'])
			{
				if ($courses[$_POST['course']]['edition1'] == $_POST['edition2'])
				{
					if ($courses[$_POST['course']]['date1'] == $_POST['date2'])
					{
						$flag1 = TRUE;
					}
				}
			}
		}
		if ($courses[$_POST['course']]['title2'] == $_POST['title2'])
		{
			if ($courses[$_POST['course']]['publ2'] == $_POST['publ2'])
			{
				if ($courses[$_POST['course']]['edition2'] == $_POST['edition2'])
				{
					if ($courses[$_POST['course']]['date2'] == $_POST['date2'])
					{
						$flag2 = TRUE;
					}
				}
			}
		}
		else if ($courses[$_POST['course']]['title2'] == $_POST['title1'])
		{
			if ($courses[$_POST['course']]['publ2'] == $_POST['publ1'])
			{
				if ($courses[$_POST['course']]['edition2'] == $_POST['edition1'])
				{
					if ($courses[$_POST['course']]['date2'] == $_POST['date1'])
					{
						$flag2 = TRUE;
					}
				}
			}
		}
	}
	
	$fh = fopen($myFile, 'a') or die("can't open file");
	if ($write == TRUE)
	{
		fwrite($fh,"[".$_POST['stu_name']."]".PHP_EOL);
		fwrite($fh,"c = ".$_POST['course'].PHP_EOL);
		fwrite($fh,"t1 = ".$_POST['title1'].PHP_EOL);
		fwrite($fh,"p1 = ".$_POST['publ1'].PHP_EOL);
		fwrite($fh,"e1 = ".$_POST['edition1'].PHP_EOL);
		fwrite($fh,"d1 = ".$_POST['date1'].PHP_EOL);
		fwrite($fh,"book_correct1 = ".$flag1.PHP_EOL);
		fwrite($fh,"t2 = ".$_POST['title2'].PHP_EOL);
		fwrite($fh,"p2 = ".$_POST['publ2'].PHP_EOL);
		fwrite($fh,"e2 = ".$_POST['edition2'].PHP_EOL);
		fwrite($fh,"d2 = ".$_POST['date2'].PHP_EOL);
		fwrite($fh,"book_correct2 = ".$flag2.PHP_EOL);
		fwrite($fh, PHP_EOL);
	}
	fclose($fh);

	
	$file_array = parse_ini_file($myFile, true);
	var_dump ($file_array);

?>