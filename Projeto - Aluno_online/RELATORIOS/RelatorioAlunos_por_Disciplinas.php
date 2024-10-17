<?php
//descricao https://phpbrasil.com/artigo/tAwFCeBScLEK/gerando-documentos-pdf-com-a-classe-fpdf
include 'fpdf/fpdf.php';
include_once 'Funcoes.php';

//Inclusão dos dados de acesso ao Banco
//require_once '../DAO/disciplinaDAO.php';

//$AlunoDAO = new AlunoDAO();
//$pessoas = $AlunoDAO->getAllAluno();
require_once '../dao/disciplina_has_usuarioDAO.php';
$disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
$disciplinas = $disciplina_has_usuarioDAO->selecionaTds();

//var_dump($disciplinas);

//Início do Relatório
$pdf = new FPDF('L');
$pdf->AddPage();

// Imagem do cabeçalho
$pdf ->Image('../BOOTSTRAP/assets/img/logoetc.png',60, 10, 100, 20);
$pdf->Ln(20);

// Título do Relatório
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, utf8_decode('Relação de Alunos'), 0, 0, "C");
$pdf->Ln(15);

//Início da construção da tabela
$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(50, 7, "Nome", 1, 0, "C");
$pdf->Cell(40, 7, "Data de Nasc.", 1, 0, "C");
//$pdf->Cell(40, 7, "Telefone", 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode("Email"), 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode("Disciplina"), 1, 0, "C");
$pdf->Ln();

foreach ($disciplinas as $lista) {

    $pdf->Cell(50, 7, utf8_decode($lista["nome"]), 1, 0, "C");
    $pdf->Cell(40, 7, formatoData($lista["datanascimento"]), 1, 0, "C");
   // $pdf->Cell(40, 7, $lista["telefone"], 1, 0, "C");
    $pdf->Cell(60, 7, utf8_decode($lista["email"]), 1, 0, "C");
    $pdf->Cell(60, 7, utf8_decode($lista["disciplina"]), 1, 0, "C");
    $pdf->Ln();
}

//Geração do Relatório em PDF
$pdf->Output();