<?php 

$dia = date("N");
echo $dia;

switch ($dia){
    case "1"; $nombre = "lunes"; break;
    case "2"; $nombre = "martes"; break;
    case "3"; $nombre = "miercoles"; break;
    case "4"; $nombre = "jueves"; break;
    case "5"; $nombre = "viernes"; break;
    case "6"; $nombre = "sabado"; break;
    default: $nombre = "domingo"; break
}

echo "<p>Hoy es $nombre</p>"
?>