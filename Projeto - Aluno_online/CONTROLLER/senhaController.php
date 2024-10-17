<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
//dados do formulario
$dataNascimento = $_POST["dataNascimento"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];

$UsuarioDAO = new usuarioDAO();
$usuario = $UsuarioDAO->retornaUsuarioSemSenha($email, $cpf, $dataNascimento);

if($usuario) {
    echo "<script>";
    echo"window.location.href='../redefinicaoSenha.php?id={$usuario["idusuario"]}' ";
    echo "</script> ";
} else {
    echo "<script> ";
    echo "alert('Usuário Não encontrado');";
    echo "window.location.href='../esqueciMinhaSenha.php'; ";
    echo "</script> ";
}
    