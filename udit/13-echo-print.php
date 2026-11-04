<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo VS Print</title>
</head>
<body>
   <h1>Echo VS print</h1> 


    <?php 
    /* asi no funciona
     if (echo('Aqui se escribe un texto <br>')) {
            echo 'El texto se ha escrito';
            } else {
                echo 'ERROR: El texto NO se ha escrito';
            };
            */

            echo("<div> Este es otro texto <div>")

            //asi funciona
            if (print('Aqui se escribe un texto <br>')) {
            echo 'El texto se ha escrito';
            } else {
                echo 'ERROR: El texto NO se ha escrito';
            };
    ?>




</body>
</html>