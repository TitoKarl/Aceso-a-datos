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
    default: $nombre = "domingo"; break;
}

echo "<p>Hoy es $nombre</p>";

$mes = date("M");

switch ($mes){
    case "1"; $month = "eneri"; break;
    case "2"; $month = "febrero"; break;
    case "3"; $month = "marzo"; break;
    case "4"; $month = "abril"; break;
    case "5"; $month = "mayo"; break;
    case "6"; $month = "junio"; break;
    case "7"; $month = "julio"; break;
    case "8"; $month = "agosto"; break;
    case "9"; $month = "septiembre"; break;
    case "10"; $month = "octubre"; break;
    case "11"; $month = "noviembre"; break;
    case "12"; $month = "diciempre"; break;
}

echo "<p>Estamos en $month</p>";
?>