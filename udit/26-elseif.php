<?php 
$numA = 8;
$numB = 20;


if ($numA > $numB) {
        echo "El n ","$numA es el mayor<br>";
    } elseif ($numA < $numB){
        echo "El n ", "$numB  es el mayor<br>";
    } else {
        echo "Los 2 numeros son iguales<br>";
    }

$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if ($idioma == "es"){
    echo "Hola<br>";
} else if ($idioma == "en") {
    echo "Hello<br>";
} else if ($idioma == "fr") {
    echo "Bounjour<br>";
} 
?>