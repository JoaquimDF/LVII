<?php
    header('Content-Type: text/html; charset=utf-8');

    require 'src/conta.php';

    $conta01 = new Conta("123.456-00", "Fulano de Tal", 650.12);

    echo $conta01->toString();
