<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="60" />
<title>Raspberry Pi Thermometer App</title>
</head>        
<body>
<h3>Sherrerd 320 Raspberry Pi Thermometer</h3>
<?php
   $cur_temp = file("cur_temp.txt");
echo "Current temperature: ".$cur_temp[0]."<br/><br/>";
echo "Current time: ".$cur_temp[1];
?>
</body>
