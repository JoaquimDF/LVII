<?php
require_once '../DTO/diarioDTO.php';
require_once '../DAO/diarioDAO.php';

$id_diario = $_POST["id_diario"];
$frequencia = $_POST["frequencia"];
$datacadastro = $_POST["datacadastro"];
$idusuario = $_POST["idusuario"];
$id_disciplina = $_POST["id_disciplina"];

$DiarioDTO = new diarioDTO();
$DiarioDTO->setFrequencia($frequencia);
$DiarioDTO->setDatacadastro($datacadastro);
$DiarioDTO->setIdusuario($idusuario);
$DiarioDTO->setId_disciplina($id_disciplina);
$DiarioDTO->setId_diario($id_diario);

$DiarioDAO = new diarioDAO();
$DiarioDAO->alterar($DiarioDTO);


if ($DiarioDAO) {
$msg = "Diário Alterado com sucesso";
echo "<script>";
            echo"window.location.href='../VIEW/formCadastroDiario.php?msg={$msg}&id_disciplina={$id_disciplina}&datacadastro={$datacadastro}' ";
    echo "</script> ";
}