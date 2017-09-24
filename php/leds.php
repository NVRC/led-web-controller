<?php

    //Node.js would be a good alternative to this tedious php workflow




    $colorArray = array();
    $NUM_LEDS = 60;

    $command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py '.$_POST);
    $output = shell_exec($command);
    echo var_dump($_FILES);

    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */






?>
