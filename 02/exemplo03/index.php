<?php
    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('d-m-Y');
    $horaAtual = date('H:i:s');
    $dataComHora = date('d-m-Y H:i:s');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com datas</title>
</head>
<body>
    <h1>Trabalhando com data e hora em PHP</h1>
    <p>A data atual é: <b><?=$dataAtual;?></b></p>
    <p>A hora atual é: <b><?=$horaAtual;?></b></p>
    <p>Data e hora atual: <b><?=$dataComHora;?></b></p>
</body>
</html>
