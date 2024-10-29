<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../layouts/nav.php";
?>
<main>

<h1>Novo Perfil</h1>
    <a class="btn btn-voltar" href="index.php">Voltar</a>

    <form action="../../control/cadastrarPerfilController.php" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required autofocus><br>

        <button class="btn" type="submit">Salvar</button>
    </form>
</main>

<?php require_once __DIR__ . "/../../layouts/footer.php"; ?>