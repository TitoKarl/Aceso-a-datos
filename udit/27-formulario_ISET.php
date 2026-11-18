<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="autoformulario.css">
</head>
<body>
        <h1>Formulario ISET</h1>
        
        

        <?php if(!$_POST) {   ?>
                <form method='post' action=" <?=$_SERVER['PHP_SELF'] ?>">
                Edad
                <input type='number' name='edad'> <br>
                Nombre
                <input type='text' name='nombre'> <br>
                <input type="checkbox" name="acepto" value="si">
                Acepto las condiciones <br>
                <input type='submit'>
            </form>
   

      <?php  } else {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        if (!isset($_POST['acepto'])){
            echo "NO has aceptado";
        }
         if (!empty($_POST['nombre'])){
            echo "Te llamas $nombre<br>";
        }
        if (!empty($_POST['edad'])){
            echo "Tienes $edad años<br> ";
        }
        if (!empty($_POST['edad']) and !empty($_POST['nombre'])){
            echo "Te llamas $nombre<br>";
            echo "Tienes $edad años<br> ";
        }
      }
     ?>
        
        
</body>
</html>