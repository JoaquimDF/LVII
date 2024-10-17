<?php

require_once '../dto/disciplina_has_usuarioDTO.php';
require_once '../dao/disciplina_has_usuarioDAO.php';
//dados do formulario
$idusuario = $_POST["idusuario"];
$id_disciplina = $_POST["id_disciplina"];
$datacadastro = $_POST["datacadastro"];

$Disciplina_has_usuarioDTO = new disciplina_has_usuarioDTO();
$Disciplina_has_usuarioDTO->setIdusuario($idusuario);
$Disciplina_has_usuarioDTO->setId_disciplina($id_disciplina);
$Disciplina_has_usuarioDTO->setDatacadastro($datacadastro);
$Disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
$sucesso = $Disciplina_has_usuarioDAO->salvar($Disciplina_has_usuarioDTO);

//echo "teste";
//exit();
if ($sucesso) {
    $msg = "Disciplina Cadastrada com sucesso";
    echo "<script>";
    echo"window.location.href='../VIEW/formAddAlunoemDisciplina.php?msg={$msg}' ";
    echo "</script> ";
}