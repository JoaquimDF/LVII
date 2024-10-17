<?php

require_once '../dto/cursoDTO.php';
require_once '../dao/cursoDAO.php';
//dados do formulario
$curso = $_POST["curso"];


$cursoDTO = new cursoDTO();
$cursoDTO->setCurso($curso);

$cursoDAO = new cursoDAO();
$sucesso = $cursoDAO->salvar($cursoDTO);

if ($sucesso) {
    $msg = "Curso Cadastrado com sucesso";
    echo "<script>";
    echo"window.location.href='../view/formCadastroCurso.php?msg={$msg}' ";
    echo "</script> ";
}