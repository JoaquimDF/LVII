<?php
 
    include 'carros.php';
    
    $c1 = new Carros();
    $c1->marca = "Honda";
    $c1->modelo = "Civic";
    $c1->ano = 2023;
    $c1->cor = "Preta";
    $c1->combustivel = "Flex";
    $c1->placa = "RG12DF33";

    echo "<pre>";
    print_r($c1);
