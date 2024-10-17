<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - MVC Usuário</title>
</head>
<body>
    <h1>Exercício 01 - Cadastro de Usuários - MVC</h1>
     <fieldset>
        <legend>Usuário</legend>
        <form action="../../control/cadastrarUsuarioController.php" method="post">
        <label for="nome">Nome</label><br>
            <input type="text" name="nome" placeholder="Informe o nome do Usuário." required autofocus><br><br>
        <label for="email">E-mail</label><br>
            <input type="email" name="email" placeholder="Informe seu e-mail"><br><br>
        <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Informe seu password"><br><br>
        <label for="status">Status</label><br>
            <input type="status" name="status" placeholder="Informe seu status"><br><br>
            
            <input type="submit" value="Salvar" name="btnSalvar">
        </form>
    </fieldset>

</body>
</html>


