<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../layouts/nav.php";
?>
<main>

    <h1>Exercício 02 - Cadastro de Novo Usuário - MVC</h1>
    <a class="btn btn-voltar" href="index.php">Voltar</a>

    <form action="../../control/cadastrarUsuarioController.php" method="post">
        <label>E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail." size="80" required autofocus><br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Informe sua senha." required><br>
        <input type="hidden" name="status" value="1">
        <label>Perfil</label>
        <select name="perfil_id">
            <option value="1">Adminstrador</option>
            <option value="2">Gerente</option>
			<option value="3">Usuário Comum</option>
        </select><br>
        <button class="btn" type="submit">Salvar</button>
    </form>
</main>

<?php require_once __DIR__ . "/../../layouts/footer.php"; ?>