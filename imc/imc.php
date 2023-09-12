<?php
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $altura = $altura / 100;
        $imc = $peso / ($altura * $altura);
        echo "Seu IMC é: " . number_format($imc, 2);
    ?>