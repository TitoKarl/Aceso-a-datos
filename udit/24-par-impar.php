<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="autoformulario.css">
</head>
<body>
        <h1>Par - Impar</h1>
        
        

        <?php if(!$_POST) {   ?>
                <form method='post' action=" <?=$_SERVER['PHP_SELF'] ?>">
                Numero
                <input type='number' name='numero' required> <br>
                <input type='submit'>
            </form>
   

      <?php  } else {
              
            $numero = $_POST['numero'];
            $mensaje = "Tu numero es " . $numero . " y es ";

            if ( $numero % 2 == 0){
                echo "$mensaje" . "PAR";
            } else {
                echo "$mensaje" . "IMPAR";
            }
       
       }; ?>
        
        
</body>
</html>