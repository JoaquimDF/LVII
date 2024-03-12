<?php

    include "conta.php";

    # criando um objeto da classe conta.
    $conta01 = new Conta();
    $conta01->saldo = 1000.0;
    $conta01->exibirSaldo();
    
    $conta02 = new Conta();
    $conta02->saldo = 650.32;
    $conta02->exibirSaldo();
