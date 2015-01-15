<?php
date_default_timezone_set("Europe/Stockholm");
echo "The time is " . date("h:i:sa") . "<br>";
$d=mktime();
echo "Todays date is " . date("Y-m-d ", $d) . "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

$my_file = 'timestamp.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the date: ' . date("y/m/d");
fwrite($handle, $data);
$new_data = "\n". date("h:i:sa");
fwrite($handle, $new_data);
$new_data = "\n". $_SERVER['HTTP_USER_AGENT'];
fwrite($handle, $new_data);
?>