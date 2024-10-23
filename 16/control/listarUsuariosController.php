<?php
require_once '../model/dto/usuariodto.php';
require_once '../model/dao/usuariodao.php';
    
      $usuarioDAO = new UsuarioDAO();
            
      $todos = $usuarioDAO->listarUsuarios();

    // echo '<pre>';
    // var_dump($todos);
?>