<?php

require_once '../dto/disciplinaDTO.php';
require_once '../dao/disciplinaDAO.php';
//dados do formulario
$disciplina = $_POST["disciplina"];
$idcurso = $_POST["idcurso"];

$DisciplinaDTO = new disciplinaDTO();
$DisciplinaDTO->setDisciplina($disciplina);
$DisciplinaDTO->setIdcurso($idcurso);

$DisciplinaDAO = new disciplinaDAO();
$sucesso = $DisciplinaDAO->salvar($DisciplinaDTO);

if ($sucesso) {
    $msg = "Disciplina Cadastrada com sucesso";
    echo "<script>";
    echo"window.location.href='../VIEW/formCadastroDisciplina.php?msg={$msg}' ";
    echo "</script> ";
}