<?php

    //Node.js would be a good alternative to this tedious php workflow
    $colors = array();

    header("Content-type: text/plain");


    if(isset($_GET)){
        echo ":: data received via GET ::\n\n";
        foreach ($_GET as $key => $value)
            $colors[$key] = ltrim($value,'#');

        $colorString = implode("",$colors);
        $command = escapeshellcmd('sudo python /var/www/led-web-controller/python/led_output.py '.$colorString);
        $output = shell_exec($command);
        error_log("SUCCESS: ".$output);
    } else {
        echo "No array of colors sent!";
    }




    //error_log(implode("|",$_SERVER),0);

    //$command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py ');
    //$output = shell_exec($command);
    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */




?>
