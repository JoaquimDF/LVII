<?php

require_once '../dto/disciplina_has_usuarioDTO.php';
require_once '../dao/disciplina_has_usuarioDAO.php';

$id_dhu = $_POST["id_dhu"];
$id_disciplina = $_POST["id_disciplina"];
$datacadastro = $_POST["datacadastro"];
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();

$disciplina_has_usuarioDTO = new disciplina_has_usuarioDTO();
$disciplina_has_usuarioDTO->setId_disciplina($id_disciplina);
$disciplina_has_usuarioDTO->setDatacadastro($datacadastro);
$disciplina_has_usuarioDTO->setId_dhu($id_dhu);

$disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
$disciplina_has_usuarioDAO->alterar($disciplina_has_usuarioDTO);

echo "<script>";
echo "alert('Cadastro editado com Sucesso!');";
echo "window.location.href = '../view/listarAllDisciplinaUsuario.php';";
echo "</script>";