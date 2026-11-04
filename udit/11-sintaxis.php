<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxis del PHP</title>

    <style>
        table {
            border: 1px solid grey;
            border-spacing: 5px;
        }
        td {
            border: 1px solid grey;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
    <h1>Sintaxis del PHP</h1>
    <h3>
        <?= 'Este es otro texto de PHPS' ?>
    </h3>
    <p>
        <?
            echo 'Este texto esta creado por PHP' ; 
        ?>
    </p>

    <?php 
    /* variables para crear una tabla */
        $filas = 5;
        $columnas = 4;
    ?>

    <table style="border: 1px solid grey; border-spacing: 5px">

        <?php for ($f=1; $f <= $filas; $f++) { ?>
        <tr>
            <?php for ($c=1; $c <= $columnas; $c++) { ?>
                <td>
                    <?php
                        print ('f'.$f. ' - ' .'c'.$c) ;
                    ?>

                </td>
            <?php } ?>
        </tr>
        <?php } ?>

    </table>

</body>
</html>