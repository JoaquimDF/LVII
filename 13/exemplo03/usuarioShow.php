<?php
    header('Content-Type: text/html; charset=utf-8;');
    
    require_once 'src/conexao.php';

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para selecionar todos os dados na tabela usuarios.
    $query = "SELECT * FROM escolabd.usuarios;"; 
    
    # prepara a execução da query e retorna para uma variável chamada stmt.
    $stmt = $dbh->query($query);

    # devolve a quantidade de linhas retornada pela consulta a tabela.
    $quantidadeRegistros = $stmt->rowCount();
    echo "<h2>Quantidade de linhas retornadas: $quantidadeRegistros</h2>";

    echo "<h3>Utilizando método Fetch com parâmetros (PDO::FETCH_BOTH OU FETCH_ASSOC).</h3>";
    # executa o loop para ler os campos retornados da tabela pelos nomes dos campos do array.
    # Guarda o valor de cada linha na variável $row.
    while($row = $stmt->fetch(PDO::FETCH_BOTH))
    {
        $status = $row['status'] == "1" ?  "Ativo" : "Inativo";
        echo "<p><strong>ID: </strong>{$row['id']}</p>";
        echo "<p><strong>E-mail: </strong>{$row['email']}</p>";
        echo "<p><strong>Nome: </strong>{$row['nome']}</p>";
        echo "<p><strong>Status: </strong>{$status}</p>";
        echo "<hr>";
    }

    # encerra a conexão com o banco de dados.
    $dbh = null;
