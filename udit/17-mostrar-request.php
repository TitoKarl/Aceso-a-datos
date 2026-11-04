<?php 
print ('Hola ' . $_REQUEST['nombre']);
?>
<br>



 <?php 
   echo 'Bienvenid@ a ' . $_REQUEST['ciudad'];

   echo '<br>Naciste el ' . $_REQUEST['nacim'];

   $suelo_anual = $_REQUEST['sueldo'] * 12;

   echo "<br>Tu sueldo anual es   $suelo_anual €";
 ?>