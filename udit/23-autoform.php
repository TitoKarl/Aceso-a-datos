<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="autoformulario.css">
</head>
<body>
        <h1>Autoformulario</h1>
        
        

        <?php if(!$_POST) {   ?>
                <form method='post' action=" <?=$_SERVER['PHP_SELF'] ?>">
                Edad
                <input type='number' name='edad' required> <br>
                <input type='submit'>
            </form>
   

      <?php  } else { ?>
            <p>
            Tienes <?=$_POST['edad']?> años <br> Espera un momento...
            <p>
       <?php  
            $edad = $_POST['edad'];

            if ( $edad >= 18){
                header('Location: https://www.playboy.com');
            } else {
                header('Location: https://www.disney.com');
            }
       
       }; ?>
        
        
</body>
</html>