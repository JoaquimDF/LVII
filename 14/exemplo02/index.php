<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    $query = "SELECT * FROM escolabd.usuarios;";

    $stmt =$dbh->query($query);

    var_dump($stmt->fetchAll());
