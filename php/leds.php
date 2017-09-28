<?php

    //Node.js would be a good alternative to this tedious php workflow

    header("Content-type: text/plain");

    echo ":: data received via GET ::\n\n";
    if(isset($_GET)){
        foreach ($_GET as $key => $value)
            echo "Key: $key Val: $value<br>";
    }

    echo "No array of colors sent!";

    //error_log(implode("|",$_SERVER),0);

    //$command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py 123');
    //$output = shell_exec($command);
    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */




?>
