<?php

require 'conta.php';

$conta01 = new Conta();

$conta01->saldo = 1000;

echo "O seu saldo é: 
R$ {$conta01->getSaldo()}";
