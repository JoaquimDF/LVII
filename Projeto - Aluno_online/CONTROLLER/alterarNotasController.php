<?php

require_once '../dto/notasDTO.php';
require_once '../dao/notasDAO.php';

$idnotas = $_POST["idnotas"];
$notas = $_POST["notas"];
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();

$notasDTO = new notasDTO();
$notasDTO->setNotas($notas);
$notasDTO->setIdnotas($idnotas);

$notasDAO = new notasDAO();
$notasDAO->alterar($notasDTO);

echo "<script>";
echo "alert('Notas editadas com Sucesso!');";
echo "window.location.href = '../view/formSelecionarLista.php';";
echo "</script>";
