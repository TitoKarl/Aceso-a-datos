<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="autoformulario.css">
</head>
<body>
        <h1>Algoritmo</h1>
        
        

        <?php if(!$_POST) {   ?>
                <form method='post' action=" <?=$_SERVER['PHP_SELF'] ?>">
                GENERO: <br>
                <label><input type='radio' name='seleccion' value="hombre" checked required>  Hombre</label> <br>
                <label><input type='radio' name='seleccion' value="mujer" required>  Mujer</label> <br>
                Altura-(cm)
                <input type='number' name='altura' value="160" required> <br>
                Peso
                <input type='number' name='peso' value="65" required> <br>
                <input type='submit'>
            </form>
   <br>

      <?php  } else {
            $genero = $_POST['seleccion'];
            $altura_m = $_POST['altura'] - 100;
            $altura_h = $_POST['altura'] - 110;
            $peso = $_POST['peso'];

            if ( $genero == "mujer" && $altura_m <= 70 ){
                echo "Siendo mujer, tu peso es ideal"; 
            } else if ($genero == "mujer" && $altura_m >= 70){
                echo "Para estar mejor tendrias que bajar $altura_m"; 
            }
            if ( $genero == "hombre" && $altura_m <= 80 ){
                echo "Siendo hombre, tu peso es ideal"; 
            } else if ($genero == "hombre" && $altura_m >= 80) {
                echo "Para estar mejor tendrias que bajar $altura_h";
            }

            
       
       }; ?>
        
        
</body>
</html>