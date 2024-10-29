<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../layouts/nav.php";

require_once __DIR__ . '/../../model/dao/perfildao.php';

# cria a variavel $id com valor igual a 1 e evita sql injecton e validar o tipo de dados. 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new PerfilDAO();
$perfil = $dao->getById($id);

if (!$perfil) {
    header('location: index.php?error=Perfil não encontrado!');
    exit;
}
?>

<main>

<h1>Atualizar Perfil</h1>
    <a class="btn btn-voltar" href="index.php">Voltar</a>

    <form action="../../control/alterarPerfilController.php" method="post">
        <input type="hidden" name="id" value="<?= $perfil['id'] ?>">
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required value="<?= htmlspecialchars($perfil['nome']) ?>" autofocus><br>
        <button class="btn" type="submit">Salvar</button>
    </form>
</main>

<?php require_once __DIR__ . "/../../layouts/footer.php"; ?>