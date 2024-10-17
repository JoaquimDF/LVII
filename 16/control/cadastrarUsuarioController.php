<?php
    require_once '../model/DTO/UsuarioDTO.php';
    require_once '../model/DAO/UsuarioDAO.php';
 
      $nome = strip_tags($_POST["nome"]);
      $email = strip_tags($_POST["email"]); 
      $password = MD5($_POST["password"]);
      $status = strip_tags($_POST["status"]); 
      
      $usuarioDTO = new UsuarioDTO();
      $usuarioDTO->setNome($nome);
      $usuarioDTO->setEmail($email);
      $usuarioDTO->setPassword($password);
      $usuarioDTO->setStatus($status);
   
      $usuarioDAO = new UsuarioDAO();         
      $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);
      //var_dump($usuarioDTO);
    
      if($sucesso){
        $msg = "Usuário cadastrado com sucesso!";   
      } else {
        $msg = "Aconteceu um problema no cadastramento<br>".$sucesso;
      }
      echo "{$msg}";
?>