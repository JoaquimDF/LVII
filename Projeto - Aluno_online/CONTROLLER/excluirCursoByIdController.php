<?php
require_once '../dao/cursoDAO.php';
$idcurso=$_GET["id"];

$cursoDAO=new CursoDAO();
$cursoDAO->excluir($idcurso);

echo "<script>";
echo 'alert("Usuário excluido com sucesso!");';
echo "window.location.href = '../view/listarAllCurso.php';";
echo "</script>";