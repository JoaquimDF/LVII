<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../layouts/nav.php";

require_once __DIR__ . "/../../model/dao/usuariodao.php";

# cria a variavel $id com valor igual a 1 e evita sql injecton e validar o tipo de dados. 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;

# cria um objeto da classe UsuarioDAO e chama método para realizar ação.
$dao = new UsuarioDAO();
$usuario = $dao->getById($id);

if (!$usuario) {
    header('location: index.php?error=Usuário não encontrado!');
    exit;
}
?>
<main>

<h1>Atualizar Usuário</h1>
    <a class="btn btn-voltar" href="index.php">Voltar</a>
    
    <form action="../../control/alterarUsuarioController.php" method="post">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label>E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail." size="80" required autofocus value="<?= htmlspecialchars($usuario['email']) ?>"><br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required value="<?= htmlspecialchars($usuario['nome']) ?>"><br>
        <label>Status</label><br>
        <select name="status">
            <option value="1">ATIVO</option>
            <option value="0">INATIVO</option>
        </select><br>
        <label>Perfil</label><br>
        <select name="perfil_id">
            <option value="1">ADMINISTRADOR</option>
            <option value="2">GERENTE</option>
			<option value="3">USUÁRIO COMUM</option>
        </select>
        <br>
        <button class="btn" type="submit">Salvar</button>
    </form>
</main>

<?php require_once __DIR__ . "/../../layouts/footer.php"; ?>