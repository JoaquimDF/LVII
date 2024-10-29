<?php
//descricao de sites de ajuda
//https://phpbrasil.com/artigo/tAwFCeBScLEK/gerando-documentos-pdf-com-a-classe-fpdf
//https://forum.scriptcase.com.br/t/fazendo-um-relatorio-fpdf-com-cabecalho-e-rodape/11988
//https://www.portugal-a-programar.pt/forums/topic/79795-gera%C3%A7%C3%A3o-de-pdf-com-fpdf/

include 'fpdf/fpdf.php';
include_once 'Funcoes.php';

//Inclusão dos dados de acesso ao Banco
require_once __DIR__ . "/../model/dao/usuariodao.php";

$dao = new UsuarioDAO();
$usuarios = $dao->getAll();
$quantidadeRegistros = count($usuarios);

//var_dump($usuarios); exit;

//Início do Relatório
$pdf = new FPDF('L');
$pdf->AddPage();

// Imagem do cabeçalho
$pdf ->Image('../imagens/logoetc.png',110, 15, 50, 25);
$pdf->Ln(20);

// Título do Relatório
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(250, 10, utf8_decode('Relação de Usuários'), 0, 0, "C");
$pdf->Ln(15);

//Início da construção da tabela
$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(50, 7, utf8_decode('Nome'), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode('Email'), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode('Status'), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode('Perfil'), 1, 0, "C");
$pdf->Ln();

if ($quantidadeRegistros == "0"){
$pdf->Cell(0,10,utf8_decode('Não existem usuários cadastrados'),0,1,'C');
$pdf->Ln();

}else{
foreach ($usuarios as $usuario){
$pdf->Cell(50, 7, utf8_decode($usuario['nome']), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode($usuario['email']), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode($usuario['status']), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode($usuario['perfil_id']), 1, 0, "C");
$pdf->Ln();
}
}
//Rodapé
$pdf ->SetY(160);
$pdf ->Line(100, $pdf->GetY(), 205,$pdf->GetY());
$pdf->SetFont("Arial", "", 6);
$pdf->Cell(0,10,utf8_decode('Escola Técnica de Ceilândia - ETC'),0,1,'C'); 
$pdf->Cell(0,10,utf8_decode('Endereço: St. N, Área Especial QNN 14 - Ceilândia, Brasília - DF'),0,1,'C');
$pdf->Ln();

//Geração do Relatório em PDF
$pdf->Output();