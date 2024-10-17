<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
//dados do formulario
$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$datanascimento = $_POST["datanascimento"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$nomeresponsavel = $_POST["nomeresponsavel"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$idperfil = $_POST["idperfil"];

$UsuarioDTO = new usuarioDTO();
$UsuarioDTO->setNome($nome);
$UsuarioDTO->setMatricula($matricula);
$UsuarioDTO->setDatanascimento($datanascimento);
$UsuarioDTO->setEndereco($endereco);
$UsuarioDTO->setEmail($email);
$UsuarioDTO->setCpf($cpf);
$UsuarioDTO->setNomeResponsavel($nomeresponsavel);
$UsuarioDTO->setLogin($login);
$UsuarioDTO->setSenha($senha);
$UsuarioDTO->setAtivo(1);
$UsuarioDTO->setIdPerfil($idperfil);

$UsuarioDAO = new usuarioDAO();
$sucesso = $UsuarioDAO->salvar($UsuarioDTO);

if ($sucesso) {
    $msg = "Usuário Cadastrado com sucesso";
    echo "<script>";
    echo"window.location.href='../VIEW/formCadastroUsuario.php?msg={$msg}' ";
    echo "</script> ";
}