<?php

    require_once 'src/conta.php';
    require_once 'src/contaespecial.php';
    require_once 'src/contaconjunta.php';

    echo '<h2>Conta Especial</h2>';
    
    # criando um objeto da classe conta especial (herança)
    $contaEspecial = new ContaEspecial("999.888-00", "Sicrano de Tal", 200.00, 100);
    echo $contaEspecial;
    
    # criando um objeto da classe conta conjunta (Error - Não pode instanciar classe derivada de final) 
    echo '<h2>Conta Conjunta</h2>';
    $contaConjunta = new ContaConjunta('456.789-12', 'Fulano Conjunto', 500.0, 200);
    echo $contaConjunta;
