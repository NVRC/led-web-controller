<?php
    $NUM_LEDS = 60;

        if(isset($_GET)){
            error_log('$_GET: '.var_dump($_GET));
            for($i=0; $i<$NUM_LEDS; $i++){
                $colors[$i] = $_GET[$i];
                error_log('Color: '.$colors[$i]);
            }
            $colorString = implode("",$colors);
            //chdir($python);
            //$command = escapeshellcmd('sudo python led_output.py '.$colorString);
            //$output = shell_exec($command);
            exec("sudo python2 /var/www/led-web-controller/python/led_output.py ".$colorString);

            //chdir($currDir);
            error_log("colorString: ".var_dump($colorString));
        } else {
            echo "No array of colors sent!";
        }


    //Node.js would be a good alternative to this tedious php workflow





    //error_log(implode("|",$_SERVER),0);

    //$command = escapeshellcmd('python /var/www/led-web-controller/python/led_output.py ');
    //$output = shell_exec($command);
    /*
    for($i = 0; $i < $NUM_LEDS; $i++){
        $colorArray[] = $_POST[$i];
    }
    */




?>
