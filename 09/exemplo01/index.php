<?php

    include 'conta.php';
    include 'contaespecial.php';

    echo '<h2>Conta Comum</h2>';
    # criando um objeto da classe conta (herança)
    $contaComun = new Conta('123.456-00', 'Fulano de Tal', 52.35);
    echo $contaComun;

    echo '<h2>Conta Especial</h2>';
    
    # criando um objeto da classe conta especial (herança)
    $contaEspecial = new ContaEspecial("999.888-00", "Sicrano de Tal", 200.00, 100);
    echo $contaEspecial;
    # tentando sacar um valor maior
    $contaEspecial->sacar(305);
