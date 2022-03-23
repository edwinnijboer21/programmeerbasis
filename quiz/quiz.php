<?php //Met behulp van Jaimy booij,  Wesley schreur, Kylian en Google. 
    $min = 1;
    $max = 100;
    $random = rand($min, $max);
    $guess = 0;



    $user_input = readline("Tijd voor een quiz? ja/nee: ");
    if ($user_input == "ja") {
        guess:  
        echo "\n\n";
        $user_input = readline("raad het getal: ");
        if ($user_input == "stop" || $user_input < $min || $user_input > $max )  {
            echo "\nprogramma gestopt";
        } else if ( !is_numeric( $user_input ) )  { 
            echo "\ninvoer onjuist, probeer het opnieuw. ";
            goto guess;
        } else {
            if ($user_input < $random) {
                $guess++;
                echo "\nFout, je zit te laag";
                goto guess;
            }
            if ($user_input > $random) {
                $guess++;
                echo "\nFout! je zit te hoog";
                goto guess;
            }
            if ($user_input == $random) {
                $guess++;
                echo "\nje hebt het goede getal geraden! Het getal is: " . $random;
                echo "\nje hebt " . $guess . " keer geraden";
            }
        }
    } else {
        echo "spel beeindigd... watje :)";
    }
?>