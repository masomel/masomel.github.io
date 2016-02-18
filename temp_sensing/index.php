<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Raspberry Pi Temperature App</title>
</head>        
<body>
<h3>Raspberry Pi Temperature App</h3>
         Current temperature in Sherrerd 320:
<?php
   $cur_temp = file_get_contents("cur_temp.txt");
   echo $cur_temp;
?>
</body>
