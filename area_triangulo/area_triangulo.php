<?php
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;

        echo "A área do triângulo é de " . number_format($area) . " metros quadrados</p>";
    ?>