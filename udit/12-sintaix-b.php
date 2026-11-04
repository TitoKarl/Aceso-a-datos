<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Sintaxis del PHP</h1>
    <h2>2ª parte</h2>

        <?php 
        echo ('Hola');
        // Comentario que ocupa el final de un renglon
        /* Comentario que
        puede ocupar
        varios renglones */



        eCHo (' mundo'); /* comentario pequeño */

        $texto= "mundo";
        echo ("<p>Hola <br> $texto</p>");/* repuera variables */
        echo ('<p>Hola <br> $texto</p>');/* no repuera variables */
        echo ('<p>Hola <br> '. $texto.'</p>');/* comentario pequeño */
        
        
        $x = 4;
        $y = 5;
        $producto = $x * $y;
        echo ("x: $x, y: $y<br>");

        echo ("La multipicacion es: $producto");
        
        echo("<p>Lunes</p>");
        echo("<p>Martes</p>");
        echo("<p>Miercoles</p>");
        echo("<p>Jueves</p>");
        echo("<p>Viernes</p>");

        function escribir() {
            echo "Lunes<br>"
            echo "Miercoles<br>"
            echo "Martes<br>"
        }
        


        ?>

</body>
</html>