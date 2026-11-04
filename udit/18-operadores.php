<?php 
    $miDato = 3 + 5;
    $miDato--;

    echo "Mi dato es $miDato";

    //$miDato++;
    

    $numA = 5;
    $numB = 5;

    echo "<br>El valor de A es " . ++$numA;
    echo "<br>El valor de B es " . $numB++;

    $numC = 7;
    $numC -= 5;

    echo "<br>El valor de C es " . $numC;

    $text1 = "<br>". "Hola" . " ¿Que tal?";
    $poema = "<br>". "Con cien caños por banda ";
    $poema .= "<br>". "viento en popa a toda vela";
    $poema .= "<br>". "no corta el mar sino vuela";
    $poema .= "<br>". "un velero bergantín";
    echo "<br> $text1";
    echo $poema

?>