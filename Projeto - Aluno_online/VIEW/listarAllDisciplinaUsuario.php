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
        $disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
        $disciplinas = $disciplina_has_usuarioDAO->selecionaTds();
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Lista de Alunos por Disciplinas</div>
            </div>
            <br>
            <div class="table-container">
                <table class="table table-borderless table-hover table-dark" border="1">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Disciplina</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($disciplinas as $d) {
                            $id_dhu = $d["id_dhu"];
                            $disciplina = $d["disciplina"];
                            $nome = $d["nome"];
                            ?>
                            <tr>
                                <td><?php echo $nome; ?></td>
                                <td><?php echo $disciplina; ?></td>
                                <td class="text-center">
                                    <a href="formAlterarDhU.php?id=<?php echo $id_dhu; ?>">
                                        Alterar
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" onclick="excluirDisciplina(<?php echo $id_dhu; ?>);">
                                        Remover
                                    </a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            function excluirDisciplina(id_Dhu) {
                if (confirm("Deseja realmente remover este usuario desta disciplina?")) {
                    window.location.href = `../controller/excluirDhuByIdController.php?id=${id_Dhu}`;
                } else {
                    // Ação de cancelamento
                }
            }
        </script>
    </body>
</html>
