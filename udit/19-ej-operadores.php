<?php


    $suma = $_REQUEST['n1'] + $_REQUEST['n2'];
    $mult = $_REQUEST['n1'] * $_REQUEST['n2'];
    $res1 = $_REQUEST['n1'] / 2;
    $res2 = $_REQUEST['n2'] / 2;

    $mayor  = "ninguno";
    if ($_REQUEST['n1'] > $_REQUEST['n2']) {
        $mayor = $_REQUEST['n1'];
    };
    if ($_REQUEST['n1'] < $_REQUEST['n2']) {
        $mayor = $_REQUEST['n2'];
    };

    $resto1 = $_REQUEST['n1'] % 2;
    $resto2 = $_REQUEST['n2'] % 2;
    

    $tipo1 = "ninguno";
    if ($resto1 == 0) {
        $tipo1 = "par";
    } else {
        $tipo1 = "impar";
    }
    $tipo2 = "ninguno";
    if ($resto2 == 0) {
        $tipo2 = "par";
    } else {
        $tipo2 = "impar";
    }
    $temp = "ninguno";
    if ($mult >= 30) {
        $temp = "Hace mucho calor";
    }

    

    echo "El primer nº es: " . $_REQUEST['n1'] . ", que es: " . $tipo1;
    echo "<br>El segundo nº es: " . $_REQUEST['n2'] . ", que es: " . $tipo2;
    echo "<br>La suma es: " . $suma;
    echo "<br>La multiplicacion es: " . $mult;
    //echo "<br>La resto del primer nº es: " . $res1;
    //echo "<br>La resto del segundo nº es: " . $res2;
    echo "<br>El numero mayor es: " . $mayor;
    echo "<br". $temp;
?>