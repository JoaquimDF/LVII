<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
//dados do formulario
$senha = md5($_POST["senha"]);
$idUsuario = $_POST["idUsuario"];
$UsuarioDAO = new usuarioDAO();
$UsuarioDTO = new usuarioDTO();
$UsuarioDTO->setSenha($senha);
$UsuarioDTO->setIdUsuario($idUsuario);
$senha = $UsuarioDAO->alterarSenha($UsuarioDTO);

if ($senha) {
    $msg = "Senha Alterada com Sucesso!";
    echo "<script>";
    echo "window.location.href = '../view/principal.php';";
    echo "</script> ";
} else {
    echo "<script> ";
    echo "alert('Senha Não Alterada');";
    echo "window.location.href='../redefinicaoSenha.php?msg={$msg}' ";
    echo "</script> ";
}
    