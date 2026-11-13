<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="autoformulario.css">
</head>
<body>
        <h1>Autoformulario</h1>
        <?php
        if(!$_POST) {   
            echo "
                <form method='post' action={$_SERVER['PHP_SELF']}>
                Edad
                <input type='number' name='edad' required> <br>
                Ciudad
                <input type='text' name='ciudad' required> <br>
                Telefono
                <input type='text' name='telefono' required> <br>
                <input type='submit'>
            </form>
        
        " ;     

        } else {
            echo "Usted vive en {$_POST['ciudad']}, tiene {$_POST['edad']}
            años y su telefono es {$_POST['telefono']} . " ;
            /* procesar datos */

        }
        ?>
        
</body>
</html>