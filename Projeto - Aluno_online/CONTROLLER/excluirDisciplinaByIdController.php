<?php
require_once '../dao/disciplinaDAO.php';
$id_disciplina=$_GET["id"];

$disciplinaDAO=new DisciplinaDAO();
$disciplinaDAO->excluir($id_disciplina);

echo "<script>";
echo 'alert("Disciplina excluida com sucesso!");';
echo "window.location.href = '../view/listarAllDisciplina.php';";
echo "</script>";