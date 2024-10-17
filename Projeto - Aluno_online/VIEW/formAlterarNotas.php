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
        require_once '../dao/notasDAO.php';
        $idnotas = $_GET["id"];
        $notasDAO = new notasDAO();
        $notas = $notasDAO->selecionaID($idnotas);
        $id_disciplina = $notas['id_disciplina'];
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Editar nota</div>
            </div>
            <br>
            <div class="jumbotron">
                <form action="../controller/alterarNotasController.php" method="post">
                    <input type="hidden" name="idnotas" value="<?= $idnotas ?>" >
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="notas" class="font-weight-bold text-warning">Nota</label>
                                <td>
                                    <input type="number" required name="notas" min="0" max="10" value="<?php echo $notas['notas']; ?>" step=".1"></td>
                                <br>
                                <br>
                                <br>
                                <br>
                                <a class="btn btn-light" href="formSelecionarLista.php">Voltar</a>
                                <button type="reset" class="btn btn-warning">Zerar</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <?php if (!empty($_GET["msg"])) { ?>
                <div class="alert bg-success alert-dismissible font-weight-bold text-white">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Atenção!</strong> <?php echo $_GET["msg"]; ?>
                </div>  
            <?php }
            ?>

        </div>
    </body>
</html>
