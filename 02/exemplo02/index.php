<?php
    date_default_timezone_set('America/Sao_Paulo');
    
    $nome = 'Ronie Peterson';
    $dataAtual = date('d-m-Y');
    $horaAtual = date('H:i');
    $dataComHora = date('d-m-Y H:i:s');

    echo "<p>A data e hora é: <strong>$dataComHora</strong></p>";

    if ($horaAtual > 0 && $horaAtual < 13)
    {
        echo "Bom dia $nome.";
    } elseif ($horaAtual >= 13 && $horaAtual <= 18)
    {
        echo "Boa tarde $nome.";
    } else {
        echo "Boa noite $nome.";
    }
