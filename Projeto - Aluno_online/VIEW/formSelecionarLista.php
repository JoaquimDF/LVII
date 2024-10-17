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
    <center>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body" style="font-size: 15pt;">Diário de alunos por Disciplinas </div>
            </div>
            <br>
            <div class="jumbotron">
                <div class="card-group">
                    <form action="listarAllFaltasNotas.php" method="post">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="id_disciplina" class="font-weight-bold text-warning">Selecione a disciplina:</label>
                                            <select required="" class="form-control" name="id_disciplina">
                                                <option value=''>Selecione</option>
                                                <?php
                                                require_once '../DAO/disciplinaDAO.php';
                                                $disciplinaDAO = new disciplinaDAO();
                                                $disciplina = $disciplinaDAO->selecionaTds();
                                                foreach ($disciplina as $D) {
                                                    $disciplina = $D["disciplina"];
                                                    $id_disciplina = $D["id_disciplina"];
                                                    $idcurso = $D["idcurso"];
                                                    ?>
                                                    <option value='<?= $id_disciplina ?>'><?= $disciplina ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <br>
                                            <button class="btn btn-success" type="submit">Selecionar</button> 
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <?php if (!empty($_GET["msg"])) { ?>
                    <div class="alert bg-success alert-dismissible font-weight-bold text-white">
                        <strong>Atenção!</strong> <?php echo $_GET["msg"]; ?>
                    </div>  
                    <script>
                        // Função para esconder o alerta após 5 segundos (5000 milissegundos)
                        setTimeout(function () {
                            var alertDiv = document.querySelector(".alert");
                            if (alertDiv) {
                                alertDiv.style.display = "none";
                            }
                        }, 5000); // 5000ms = 5 segundos
                    </script>
                <?php }
                ?>
            </div>
    </center>
</body>
</html>
