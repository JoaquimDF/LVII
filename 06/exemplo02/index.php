<?php
    require_once "conta.php";

    $conta01 = new Conta();

    $conta01->setNumero('123.456-00');
    $conta01->setCliente('Fulano de Tal');
    $conta01->setSaldo(432.56);
    echo $conta01->toString();
