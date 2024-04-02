<?php
    header('Content-Type: text/html; charset=utf-8');
    require 'src/conta.php';
    require 'src/contaespecial.php';

    echo '<h2>Conta Comum</h2>';
    # criando um objeto da classe conta (herança) (ERROR) - Classe abstrata não pode ser instanciada
    // $contaComun = new Conta('123.456-00', 'Fulano de Tal', 52.35);
    // echo $contaComun;

    echo '<h2>Conta Especial</h2>';
    
    # criando um objeto da classe conta especial (herança)
    $contaEspecial = new ContaEspecial("999.888-00", "Sicrano de Tal", 200.00, 100);
    echo $contaEspecial;
    # tentando sacar um valor maior
    echo 'Efetuando saque de R$ 233.23';
    $contaEspecial->sacar(233.23);
    echo $contaEspecial;
