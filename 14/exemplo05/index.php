<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    # usando funcionalidade nova do PHP 8 chamada null coalescing operatior
    $id = $_GET['id'] ?? 0;

    # cria o comando select filtrado pelo campo id e valor = $id
    $query = "SELECT * FROM escolabd.usuarios WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $usuario = $stmt->fetch();

    if ($usuario)
    {
        echo "<p><b>ID: </b> {$usuario['id']}</p>";
        echo "<p><b>Nome: </b> {$usuario['nome']}</p>";
        echo "<p><b>E-mail: </b> {$usuario['email']}</p>";
    } else {
        echo "Não existe usuário cadastrado com id = $id";
    }
