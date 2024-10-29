<?php
session_start();
require_once __DIR__ . '/../model/dao/usuariodao.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$passwordCrypto = md5($password);

$dao = new UsuarioDAO();
$usuario = $dao->login($email, $passwordCrypto);

if (!$usuario) {
    header("location: ../index.php?error=Login ou senha inválidos!");
    exit;
}

//echo "Usuário: ", $_SESSION["usuario"];
$_SESSION['usuario'] = array(
    'id' => $usuario['id'],
    'nome' => $usuario['nome'],
    'email' => $usuario['email'],
    'perfil' => $usuario['perfil_id'],
);
echo "Usuário logado: ". $_SESSION['nome'];
header("location: ../index.php");