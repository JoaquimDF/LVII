<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    # usando funcionalidade nova do PHP 8 chamada null coalescing operatior
    $id = $_GET['id'] ?? 0;

    # cria o comando DELETE filtrado pelo campo id e valor = $id
    $query = "DELETE FROM escolabd.usuarios WHERE id = :id;";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0)
    {
        echo "<p>Usuário excluído com sucesso!</p>";
    } else {
        echo "Não existe usuário cadastrado com id = $id";
    }
