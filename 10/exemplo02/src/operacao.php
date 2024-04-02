<?php 
    include 'calculadora.php';

    if (isset($_GET['executar']))
    {
        $operacao = isset($_GET['operacao']) ? $_GET['operacao'] : 'somar';
        $valor1 = isset($_GET['valor1']) ? $_GET['valor1'] : 0;
        $valor2 = isset($_GET['valor2']) ? $_GET['valor2'] : 0;
        
        $calculadora = new Calculadora($valor1, $valor2, $operacao);

        echo "<p>Resultado da operação de {$operacao}: {$calculadora->executarOperacao()}</p>";
    }
