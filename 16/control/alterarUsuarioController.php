<?php
require_once '../model/dto/usuariodto.php';
require_once '../model/dao/usuariodao.php';

# recebe os valores enviados do formulário via método post.
$id = strip_tags($_POST["id"]);
$nome = strip_tags($_POST["nome"]);
$email = strip_tags($_POST["email"]); 
$status = strip_tags($_POST["status"]); 
$perfil_id = strip_tags($_POST["perfil_id"]); 

    // echo '<pre>'; var_dump($nome, $email, $password, $status, $perfil); exit;
    $usuarioDTO = new UsuarioDTO();
    $usuarioDTO->setId($id);
    $usuarioDTO->setNome($nome);
    $usuarioDTO->setEmail($email);
    $usuarioDTO->setStatus($status);
    $usuarioDTO->setPerfilId($perfil_id);
 
    $usuarioDAO = new UsuarioDAO();         
    $sucesso = $usuarioDAO->update($usuarioDTO);
    //var_dump($usuarioDTO);

if ($sucesso) {
  $msg = "Usuário alterado com sucesso!";
} else {
  $msg = "Aconteceu um problema na alteração de dados." . $sucesso;
}
echo "{$msg}";
?>