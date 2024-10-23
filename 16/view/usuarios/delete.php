<?php
require_once __DIR__ . "/../../layouts/header.php";
require_once __DIR__ . "/../../layouts/nav.php";

require_once __DIR__ . "/../../model/dao/usuariodao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;

$dao = new UsuarioDAO();
$usuario = $dao->delete($id);

if ($usuario > 0) {
    header('location: index.php?msg=Usuário excluído com sucesso!');
} else {
    header('location: index.php?error=Não foi possível excluir o usuário!');
}
