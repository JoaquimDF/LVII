<?php
    header('Content-Type: text/html; charset=utf-8;');
    
    require_once 'src/conexao.php';

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para inserir dados na tabela perfil.
    $query = "INSERT INTO escolabd.perfis (nome) 
                VALUES ('ADMINISTRADOR');"; 
    # manda excecutar a instrução query na tabela do banco de dados (adicionar registro).
    # se tudo estiver certo, retorna um valor maior que zero (true).
    $result = $dbh->exec($query);

    if ($result)
    {
        echo 'Perfil inserido com sucesso';
    } else {
        echo 'Não foi fossível inserir perfil';
        # método da classe conexao que informa o error ocorrido na execução da query.
        $error = $dbh->errorInfo();
        print_r($error);
    }
