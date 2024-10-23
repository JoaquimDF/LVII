<?php
require_once '../model/dto/usuariodto.php';
require_once '../model/dao/usuariodao.php';
 
    # recebe os valores enviados do formulário via método post.
    $nome = strip_tags($_POST["nome"]);
    $email = strip_tags($_POST["email"]); 
    $password = MD5($_POST["password"]);
    $status = strip_tags($_POST["status"]); 
    $perfil_id = strip_tags($_POST["perfil_id"]); 
      
     //echo '<pre>'; var_dump($nome, $email, $password, $status, $perfil_id); exit;
      $usuarioDTO = new UsuarioDTO();
      $usuarioDTO->setNome($nome);
      $usuarioDTO->setEmail($email);
      $usuarioDTO->setPassword($password);
      $usuarioDTO->setStatus($status);
      $usuarioDTO->setPerfilId($perfil_id);

      $usuarioDAO = new UsuarioDAO();         
      $sucesso = $usuarioDAO->newInsert($usuarioDTO);
      
    //  echo '<pre>'; var_dump($usuarioDTO);exit;
    
      if($sucesso){
        $msg = "Usuário cadastrado com sucesso!";   
      } else {
        $msg = "Aconteceu um problema no cadastramento<br>".$sucesso;
      }
      echo "{$msg}";
?>