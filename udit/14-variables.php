<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de PHP</title>
</head>
<body>
    <h1>Variablesde PHP</h1>

    <?php 
    
        $dia = 'viernes';


        echo "Hoy es $dia";

        /* debe estar configuracion de php.ini
         short_open_tag=On */
    ?>

    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. <Strong><?=$dia?></Strong> Eveniet corporis, veritatis cum voluptas dolore voluptatum provident minus assumenda repudiandae velit quidem, expedita deserunt nihil accusamus voluptate quis excepturi tenetur. Voluptatum. </p>
    
    <?php 
    
    $nombre = "Pepe";
    $apellido = "Gotera";
    $direccion = "C/Calle";
    $poblacion = "Madrid";
    $cpost = "24312";
    $ciudad = $poblacion . " - " . $cpost;
    $nombreCompleto = $nombre . " " . $apellido;
    ?>

    <p><?=$nombreCompleto?></p>
    <?=$direccion?><br>
    <?=$ciudad?>
    

    <?php 
    /* VARIABLES SUPERGLOBALES
    $_SERVER
    $_COOKIE
    $_SESSION
    $_GET    
    $_POST
    $_REQUEST
    $_FILES
    */
        echo "<p>Tu direccion IP es {$_SERVER['REMOTE_ADDR']}   </p>";
    ?>
</body>
</html>