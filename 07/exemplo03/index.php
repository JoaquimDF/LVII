<?php
    header('Content-Type: text/html; charset=utf-8');

    require 'conta.php';
    # chama metodo construtor.
    $conta01 = new Conta("123.456-00", "Fulano de Tal", 650.12);

    # chama metodo mágico toString.
    echo $conta01;

    # chama metodo mágico set para modificar valor do saldo.
    $conta01->saldo = 500;

    echo '<hr>';
    # chama metodo mágico toString.
    echo $conta01;
