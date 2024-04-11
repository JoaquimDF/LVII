<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    # cria a variavel $id com valor igual a 1. 
    $id = 1;

    # cria o comando select filtrado pelo campo id e valor = $id
    $query = "SELECT * FROM escolabd.usuarios WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo '<pre>';
    print_r($stmt->fetchAll());
