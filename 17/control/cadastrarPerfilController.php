<?php

require_once __DIR__ . '/../model/dao/perfildao.php';

# recebe os valores enviados do formulário via método post e evita sql injecton e validar o tipo de dado.
$nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

$perfilDTO = new PerfilDTO();
$perfilDTO->setNome($nome);

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new PerfilDAO();
$sucesso = $dao->new($perfilDTO);

//  echo '<pre>'; var_dump($perfilDTO);exit;
if ($sucesso) {
    header('location: ../view/perfis/index.php?msg=Perfil adicionado com sucesso!');
} else {
    header('location: ../view/perfis/index.php?error=Não foi possível adicionar o perfil!');
}
?>