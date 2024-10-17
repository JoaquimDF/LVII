<?php
require_once '../DTO/diarioDTO.php';
require_once '../DAO/diarioDAO.php';
//dados do formulario


$frequencia = $_POST["frequencia"];
$datacadastro = $_POST["datacadastro"];
$idusuario = $_POST["idusuario"];
$id_disciplina = $_POST["id_disciplina"];

$DiarioDTO = new diarioDTO();
$DiarioDTO->setFrequencia($frequencia);
$DiarioDTO->setDatacadastro($datacadastro);
$DiarioDTO->setIdusuario($idusuario);
$DiarioDTO->setId_disciplina($id_disciplina);

$DiarioDAO = new diarioDAO();
$sucesso = $DiarioDAO->salvar($DiarioDTO);


if ($sucesso) {
$msg = "Diário Cadastrado com sucesso";
echo "<script>";
            echo"window.location.href='../VIEW/formCadastroDiario.php?msg={$msg}&id_disciplina={$id_disciplina}&datacadastro={$datacadastro}' ";
    echo "</script> ";
}