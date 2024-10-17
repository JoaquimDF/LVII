<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" type="image/png" href="../bootstrap/assets/img/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../bootstrap/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../bootstrap/assets/css/style.css" rel="stylesheet">
    </head>
    <body style="background-color: #2d3674ff">
        <br><br>
        <?php
        // Listar Todos os  USUÁRIOS
        require_once '../dao/disciplina_has_usuarioDAO.php';
        require_once '../DAO/usuarioDAO.php';
        require_once '../DAO/diarioDAO.php';
        require_once '../DAO/notasDAO.php';
        require_once '../DAO/DisciplinaDAO.php';
 
        $id_disciplina = $_POST["id_disciplina"];
        $usuarioDAO = new usuarioDAO();
        $disciplinaDAO = new disciplinaDAO();
        $disciplinaObj = $disciplinaDAO->selecionaID($id_disciplina);
        $alunos = $usuarioDAO->selecionaAlunosTotal($id_disciplina);
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Diário de <?=$alunos[0]["disciplina"]?></div>
            </div>
            <br>
            <div class="table-container">
                <table class="table table-borderless table-hover table-dark" border="1">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Nota Final</th>
                            <th>Frequencia Total</th>
                            <th class="text-center">Editar Nota</th>
                            <th class="text-center">Visualizar Histórico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($alunos as $a) {
                            
                            $id_dhu = $a["id_dhu"];
                            $idusuario = $a["IDUSUARIO"];
                            $disciplina = $a["disciplina"];
                            $idnotas = $a["idnotas"];
                            $notas = $a["notas"];
                            $nome = $a["nome"];
                            $faltasObj = $usuarioDAO->selecionaFaltas($idusuario, $id_disciplina);
                            $faltas = $faltasObj[0]["faltas"]*2;
                            ?>
                            <tr>
                                <td><?php echo $nome; ?></td>
                                <td><?php echo $notas; ?></td>
                                <td><?php echo $faltas?></td>
                                <td class="text-center">
                                    <a href="formAlterarNotas.php?id=<?php echo $idnotas; ?>">
                                        Alterar
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="ListarDiario.php?idusuario=<?php echo $idusuario; ?>&amp;id_disciplina=<?php echo $id_disciplina?>&amp;nome=<?php echo $nome?>";">
                                        Listar
                                    </a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>
</html>
