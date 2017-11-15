<?php


        if(isset($_GET)){
            echo ":: data received via GET ::\n\n";
            foreach ($_GET as $key => $value)
                $colors[$key] = ltrim($value,'#');

            $colorString = implode("",$colors);
            //chdir($python);
            //$command = escapeshellcmd('sudo python led_output.py '.$colorString);
            //$output = shell_exec($command);
            exec("sudo python2 /var/www/led-web-controller/python/led_output.py ".$colorString);

            //chdir($currDir);
            error_log("colorString: ".$colorString);
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
