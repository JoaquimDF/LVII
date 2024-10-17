<?php

require_once '../dto/cursoDTO.php';
require_once '../dao/cursoDAO.php';

$idcurso = $_POST["idcurso"];
$curso = $_POST["curso"];
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();

$cursoDTO = new cursoDTO();
$cursoDTO->setIdcurso($idcurso);
$cursoDTO->setCurso($curso);

$cursoDAO = new cursoDAO();
$cursoDAO->alterar($cursoDTO);

echo "<script>";
echo "alert('Curso editado com Sucesso!');";
echo "window.location.href = '../view/listarAllCurso.php';";
echo "</script>";
