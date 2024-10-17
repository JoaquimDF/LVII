<?php
require_once '../DTO/notasDTO.php';
require_once '../DAO/notasDAO.php';
//dados do formulario

$id_disciplina = $_POST["id_disciplina"];
$idusuario = $_POST["idusuario"];
$datacadastro = $_POST["datacadastro"];
$notas = $_POST["notas"];



$NotasDTO = new notasDTO();
$NotasDTO->setId_disciplina($id_disciplina);
$NotasDTO->setIdusuario($idusuario);
$NotasDTO->setDatacadastro($datacadastro);
$NotasDTO->setNotas($notas);
$NotasDTO->setAtivo(1);



$NotasDAO = new notasDAO();
$sucesso = $NotasDAO->salvar($NotasDTO);


if ($sucesso) {
$msg = "Diário Cadastrado com sucesso";
echo "<script>";
            echo"window.location.href='../VIEW/formSelecionarDisciplinaNota.php?msg={$msg}' ";
    echo "</script> ";
}