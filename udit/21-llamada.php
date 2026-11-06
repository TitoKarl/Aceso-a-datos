<?php
    $nomb = $_POST['nombre'];
    if (isset ($_POST['box'])) {
        echo "Quiero que llamen a " . $nomb;
    } else {
        echo "No quiero que llamen a " . $nomb;
    }
?>