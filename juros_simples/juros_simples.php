<?php
    function calcularJurosSimples($principal, $taxa, $tempo) {
        $taxaDecimal = $taxa / 100;
        $juros = $principal * $taxaDecimal * $tempo;
        return $juros;
    }

    if (isset($_POST['calcular'])) {
        $principal = $_POST['principal'];
        $taxa = $_POST['taxa'];
        $tempo = $_POST['tempo'];

        $juros = calcularJurosSimples($principal, $taxa, $tempo);

        echo "O total em juros simples é de R$ " . number_format($juros, 2, ',', '.');
    }
    ?>