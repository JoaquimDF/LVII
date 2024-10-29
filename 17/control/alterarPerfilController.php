<?php
header('Content-Type: text/html; charset=utf-8;');
require_once __DIR__. '/../model/dto/perfildto.php';
require_once __DIR__. '/../model/dao/perfildao.php';

# recebe os valores enviados do formulário via método post e evita sql injecton e validar o tipo de dados.
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? 0;
$nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

$perfilDTO = new PerfilDTO();
$perfilDTO->setId($id);
$perfilDTO->setNome($nome);

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new PerfilDAO();
$result = $dao->update($perfilDTO);

if ($result) {
    header('location: ../view/perfis/index.php?msg=Perfil atualizado com sucesso!');
} else {
    header('location: ../view/perfis/index.php?error=Não foi possível atualizar o perfil!');
}