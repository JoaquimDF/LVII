<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    # usando funcionalidade nova do PHP 8 chamada null coalescing operatior
    $id = $_GET['id'] ?? 0;

    $nome = $_GET['nome'] ?? 'Nome não informado foi atualizado';

    # cria o comando UPDATE filtrado pelo campo id e valor = $id
    $query = "UPDATE escolabd.usuarios SET nome = :nome WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0)
    {
        echo "<p>Usuário com id = $id foi atualizado com sucesso!</p>";
    } else {
        echo "Não existe usuário cadastrado com id = $id";
    }
