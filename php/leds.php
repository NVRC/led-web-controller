<?php
$colorArray;
$NUM_LEDS = 60;

for($i = 0; $i < NUM_LEDS; i++){
    colorArray.append($_POST[i]);
}


$command = escapeshellcmd('/usr/custom/python/leds_output.py '+colorArray);
$output = shell_exec($command);
echo $output;




?>
