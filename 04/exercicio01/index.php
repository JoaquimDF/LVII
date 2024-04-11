<?php
    # inicia o trabalho com sessão
    session_start();

    # cria uma variavel com conteúdo array vazio.
    $tarefas = [];    
    // session_destroy();

    # verifica se existe uma sessao com o nome tarefas.
    # se existir, atribui o valor armazenado a variável tarefas.
    if (isset($_SESSION['tarefas']))
    {
        $tarefas = $_SESSION['tarefas'];
    }

    # verifica se estamos passando os dados enviados pelo formulario.
    # se sim, adiciona o valor a variável tarefas. Modifica o valor da variavel de sessão.
    # redireciona a página para index.php
    if (isset($_GET['nome']) && isset($_GET['botaoEnviar']))
    {
        $tarefas[] =  $_GET['nome'];
        $_SESSION['tarefas'] = $tarefas;
        header('location: /');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gerencidador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" autofocus required>
            <input type="submit" value="Cadastrar" name="botaoEnviar">
        </fieldset>

        <h2>Tarefas</h2>
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($tarefas) {
                    foreach($tarefas as $tarefa) { ?> 
                    <tr>
                        <td><?=$tarefa?></td>
                    </tr>
                    <?php } } else { ?>
                    <tr>
                        <td >Não existem tarefas cadastrados.</td>
                    </tr>    
                <?php } ?>
            </tbody>
        </table>
        
    </form>
</body>
</html>
