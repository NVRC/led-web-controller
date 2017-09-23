<?php
    $colorArray = array();
    $NUM_LEDS = 60;

    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }



    $command = escapeshellcmd('sudo python led_output.py '.escapeshellarg($colorArray));
    echo $command;
    $output = shell_exec($command);
    echo $output;
?>
