<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplos de PHP</h1>

    <h2>Primeras pruebas de PHP</h2>

    <h3>21 octubre 2026</h3>

        
    <p style="color:red" >
        <?php           
           if (copy('anunciononono.gif', 'archivo-copiado.gif')) {
            echo 'El archivo se ha copiado con exito';
            } else {
                echo 'ERROR: El archivo no ha podido copiarse';
            };
        ?>
    </p>
    <p>
        <?php           
            echo "Hola mundo"
        ?>
    </p>
    <p>
        <?php           
            echo "Juan Carlos Rodriguez"
        ?>
    </p>
    <p>
        <?php           
            echo "<p>De madrid al cielo</p>"
        ?>
    </p>
    <p>
        <?php           
            print(date('l, d F Y'));
            echo'<br>'; 
            echo date("F j, Y, g:i a") . "\n";
        ?>
    </p>
    
</body>
</html>