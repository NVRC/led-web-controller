<?php

    //Node.js would be a good alternative to this tedious php workflow

    header("Content-type: text/plain");

    echo ":: data received via GET ::\n\n";
    print_r($_GET);

    echo "\n\n:: Data received via POST ::\n\n";
    print_r($_POST);

    echo "\n\n:: Data received as \"raw\" (text/plain encoding) ::\n\n";
    if (isset($HTTP_RAW_POST_DATA)) { echo $HTTP_RAW_POST_DATA; }

    echo "\n\n:: Files received ::\n\n";
    print_r($_FILES);


    $colorArray = array();
    $NUM_LEDS = 60;

    //error_log(implode("|",$_SERVER),0);

    //$command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py 123');
    //$output = shell_exec($command);
    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */






?>
