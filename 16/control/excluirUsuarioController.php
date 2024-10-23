<?php
require_once '../model/dto/usuariodto.php';
require_once '../model/dao/usuariodao.php';

    error_reporting(0);

      $idUsu = $_GET['id'];

      $usuarioDAO = new UsuarioDAO();
      $sucesso = $usuarioDAO->update($usuarioDTO);

?>