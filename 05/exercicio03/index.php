<?php

    require_once "conta.php";

    $conta01 = new Conta();
    $conta01->abrirConta('123.456-00', 'Aluno01 ETC', 420.32);
    $conta01->imprimirSaldo();

    $conta01->depositar(60);
    echo "<p>Você depositou R$ 60,00</p>";
    $conta01->imprimirSaldo();

    $conta01->sacar(121.11);
    echo "<p>Você sacou R$ 121,11</p>";
    $conta01->imprimirSaldo();
