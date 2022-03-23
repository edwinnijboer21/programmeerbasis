<?php

    $naam = readline("Geef jouw naam : ");
    $leeftijd = readline("Geef jouw leeftijd : ");

        echo "Hallo $naam \n";


    $age = "21";

    if ( $leeftijd < 21 ) {
        echo "Jij bent jonger dan $age jaar.\n";
    }

    if ( $leeftijd > 21 ) {
        echo "Jij bent ouder dan $age jaar.\n";
    }

    if ( $leeftijd == 21 ) {
        echo "Jij bent precies $age jaar.\n";
    }
   
?>