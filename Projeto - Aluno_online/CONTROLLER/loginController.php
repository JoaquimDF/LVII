<?php

session_start();
require_once '../dao/loginDAO.php';

$login = $_POST["login"];
$senha = md5($_POST["senha"]);
//$senha = md5($_POST["senha"]);

$loginDAO = new loginDAO();
$usuario = $loginDAO->login($login, $senha);

if (!empty($usuario)) {
    $_SESSION["login"] = $usuario["login"];
    $_SESSION["perfil"] = $usuario["perfil"];
    $_SESSION["idusuario"] = $usuario["idusuario"];
    echo "<script>";
    echo "window.location.href = '../view/principal.php';";
    echo "</script> ";
} else {
    $msg = "Usuário e/ou senha inválido";
    echo "<script>";
    echo "window.location.href = '../login.php?msg={$msg}';";
    echo "</script> ";
}
?>
