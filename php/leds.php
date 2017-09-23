<?php
$colorArray = array();
$NUM_LEDS = 60;

for($i = 0; $i < $NUM_LEDS; $i++){
    $colorArray[] = ($_POST[$i]);
}



$command = escapeshellcmd('/var/www/led-web-controller/python/ led_output.py '.escapeshellarg($colorArray));
$output = shell_exec($command);
echo $output;




?>
