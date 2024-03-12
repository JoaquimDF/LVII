<?php
    header('Content-Type: text/html; charset=utf-8');

    require 'conta.php';
    # chama metodo construtor.
    $conta01 = new Conta("123.456-00", "Fulano de Tal", 650.12);

    # chama metodo mágico get para ler valor do saldo.
    echo "Valor do saldo atual: R$ " . $conta01->saldo;

    # chama metodo mágico set para modificar valor do saldo.
    $conta01->saldo = 500;

    echo '<hr>';
    # chama metodo mágico get para ler novo valor do saldo.
    echo "Novo valor do saldo: R$ " . $conta01->saldo;
