<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Raspberry Pi Temperature Sensing</title>
</head>        
<body>
<h3>Current Temperature in Sherrerd 320</h3>
<?php
$time = $_POST['time'];
$fahrenheit = $_POST['fahrenheit'];
$celcius = $_POST['celcius'];
echo $time.": ".$fahrenheit."&#176;F / ".$celcius."&#176;C"
?>
</body>
