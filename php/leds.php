<?php
$colorArray;
$NUM_LEDS = 60;

for($i = 0; $i < NUM_LEDS; i++){
    colorArray.append($_POST[i]);
}


$command = escapeshellcmd('/var/www/led-web-controller/python/led_output.py '.colorArray);
$output = shell_exec($command);
echo $output;




?>
