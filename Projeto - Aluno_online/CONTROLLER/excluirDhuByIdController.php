<?php
require_once '../DAO/disciplina_has_usuarioDAO.php';
$id_dhu=$_GET["id"];

$disciplina_has_usuarioDAO=new disciplina_has_usuarioDAO();
$disciplina_has_usuarioDAO->excluir($id_dhu);

echo "<script>";
echo 'alert("Disciplina excluido com sucesso!");';
echo "window.location.href = '../view/listarAllDisciplinaUsuario.php';";
echo "</script>";