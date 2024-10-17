<?php
require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

$idusuario = $_GET["id"];
$ativo = 0;

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setAtivo($ativo);
$usuarioDTO->setIdusuario($idusuario);

$usuarioDAO = new usuarioDAO();
$usuarioDAO->desabilitar($usuarioDTO);

echo "<script>";
echo 'alert("Usuário desabilitado com sucesso!");';
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script>";