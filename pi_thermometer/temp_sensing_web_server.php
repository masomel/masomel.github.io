// receives the new temperature reading from the raspberry pi temp sensing
// web client once a minute and updates the file
<?php
$time = $_POST["time"];
$fahrenheit = $_POST["fahrenheit"];
$celcius = $_POST["celcius"];
$cur_temp = $fahrenheit."&#176;F / ".$celcius."&#176;C\n";
$cur_temp = $cur_temp.$time;
file_put_contents("cur_temp.txt", $cur_temp, LOCK_EX);
?>