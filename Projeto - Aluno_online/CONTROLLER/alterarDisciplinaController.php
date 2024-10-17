<?php

require_once '../dto/disciplinaDTO.php';
require_once '../dao/disciplinaDAO.php';

$id_disciplina = $_POST["id_disciplina"];
$disciplina = $_POST["disciplina"];
$curso = $_POST["idcurso"];
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();

$disciplinaDTO = new disciplinaDTO();
$disciplinaDTO->setDisciplina($disciplina);
$disciplinaDTO->setIdCurso($curso);
$disciplinaDTO->setId_disciplina($id_disciplina);

$disciplinaDAO = new disciplinaDAO();
$disciplinaDAO->alterar($disciplinaDTO);

echo "<script>";
echo "alert('Disciplina editado com Sucesso!');";
echo "window.location.href = '../view/listarAllDisciplina.php';";
echo "</script>";