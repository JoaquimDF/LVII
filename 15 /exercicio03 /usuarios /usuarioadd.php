<?php
    header('Content-Type: text/html; charset=utf-8;');
    
    require_once '../src/conexao.php';

    # recebe os valores enviados do formulário via método post.
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $nome = $_POST['nome'];
    $status = 1;

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para inserir dados na tabela usuarios.
    $query = "INSERT INTO escolabd.usuarios (email, password, nome, status) 
                VALUES (:email, :password, :nome, :status);"; 
    
    # prepara a execução da query e retorna para uma variável chamada stmt.
    $stmt = $dbh->prepare($query);

    # com a variável stmt, usada bindParam para associar a cada um dos parâmetro
    # e seu tipo (opcional).
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':status', $status);
    
    # executa a instrução contida em stmt e se tudo der certo retorna uma valor maior que zero.
    $result= $stmt->execute();
    $dbh = null;
    if ($result)
    {
        header('location: index.php');
    } else {
        header('location: index.php?msg=Não foi possível cadastrar o usuário com ID: {$id}');
    }
