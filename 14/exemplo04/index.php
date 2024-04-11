<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    # cria a variavel $id com valor igual a 1. 
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    
    # cria o comando select filtrado pelo campo id e valor = $id
    $query = "SELECT * FROM escolabd.usuarios WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $usuario = $stmt->fetch();

    if (!$usuario)
    {
        echo "Não existe usuário cadastrado com id = $id";
        exit;
    }

    echo "<p><b>ID: </b> {$usuario['id']}</p>";
    echo "<p><b>Nome: </b> {$usuario['nome']}</p>";
    echo "<p><b>E-mail: </b> {$usuario['email']}</p>";
