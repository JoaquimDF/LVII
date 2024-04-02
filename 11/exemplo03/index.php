<?php
     header('Content-Type: text/html; charset=utf-8;');
   
    include 'src/conexao.php';

    $db = Conexao::getConexao();
    if (isset($db)) 
    {
        echo 'Conexão com sucesso!';               
    } 
