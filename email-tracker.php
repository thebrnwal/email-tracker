<?php

readfile('tracking.gif');


//Script of Tracking information

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];

$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$txt = "Date and Time : ".$date."\r\nIP Address : ".$_SERVER['REMOTE_ADDR']."\r\nCountry : ".$country."\r\nCity : ".$city."\r\nUser-Agent : ".
$_SERVER['HTTP_USER_AGENT']."\r\n=================================================================================================";
$myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);
exit;

?>

