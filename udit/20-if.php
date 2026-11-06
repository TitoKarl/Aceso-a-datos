<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de IF</title>
</head>
<body>
    <h1>Ejercicios de IF</h1>

    <?php
    /* Temperatura */
        $temp = 36;

        if  ($temp >= 30) {
            echo "<p>Hace mucho calor</p>";
        } else {
            echo "<p>La temperatura es agradable</p>";
        };    
    ?>
    <?php
    /* Descuento */
        $total_carrito = 189;
        $descuento = $total_carrito * 0.9;
        $mensaje = "El total de tu carrito es: $total_carrito";
        
        if ($total_carrito >= 100) {
            $mensaje .= " y con 10% descuento se queda en: $descuento";
        }

        print "$mensaje"
    
    ?>
     <?php
    /* Contaseñas */

        $contraseña_enviada = "Adios";
        $contraseña_correcta = "Adios";
        $resbueno = "<p>Contraseña correcta</p>";
        $resmalo = "<p>Contraseña incorrecta</p>";

        if ($contraseña_correcta == $contraseña_enviada) {
            print $resbueno;
        } else {
            print $resmalo;
        };
    ?>
    <?php
    /* Edad */

        $edad = 18;
        $val = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
        print $val

    ?>
    <?php
    /* Ciudad */

    $residencia = "Leganes";

    if ($residencia == "Leganes" || $residencia == "Getafe") {
        print "<p>Tienes descuento</p>";
    } else {
        print "<p>No tienes descuento</p>";
    };

    ?>
</body>
</html>