<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

$idusuario = $_POST["idusuario"];
$login = $_POST["login"];
$perfil = $_POST["idperfil"];
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setLogin($login);
$usuarioDTO->setIdPerfil($perfil);
$usuarioDTO->setIdusuario($idusuario);

$usuarioDAO = new usuarioDAO();
$usuarioDAO->alterar($usuarioDTO);

echo "<script>";
echo "alert('Usuário editado com Sucesso!');";
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script>";
