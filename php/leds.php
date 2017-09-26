<?php

    //Node.js would be a good alternative to this tedious php workflow




    $colorArray = array();
    $NUM_LEDS = 60;


    error_log($_GET,0,);

    //$command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py 123');
    //$output = shell_exec($command);
    foreach($_GET as $key=>$value){
        echo "$key = ".urldecode($value)."</br>\n";
    }

    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */






?>
