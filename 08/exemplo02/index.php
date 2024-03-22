<?php

    include 'src/conta.php';
    include 'src/contaespecial.php';

    echo '<h2>Conta Comum</h2>';
    $contaComun = new Conta('123.456-00', 'Fulano de Tal', 52.35);

    echo $contaComun;

    echo '<h2>Conta Especial</h2>';
    
    $contaEspecial = new ContaEspecial("999.888-00", "Sicrano de Tal", 200.00);
    $contaEspecial->setLimite(100);

    echo $contaEspecial;
    echo "<p><b>Saldo com limite: R$</b> {$contaEspecial->getSaldoEspecial()}</p> ";
