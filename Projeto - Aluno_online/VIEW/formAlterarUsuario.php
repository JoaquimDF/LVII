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
        require_once '../dao/usuarioDAO.php';
        $idusuario = $_GET["id"];
        $usuarioDAO = new usuarioDAO();
        $usuario = $usuarioDAO->selecionaID($idusuario);
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Editar de Usuário</div>
            </div>
            <br>
            <div class="jumbotron">
                <form action="../controller/alterarUsuarioController.php" method="post">
                    <input type="hidden" name="idusuario" value="<?= $idusuario ?>" >
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="login" class="font-weight-bold text-warning">Login</label>
                                <input type="text" name="login" value="<?php echo $usuario["login"] ?>"id="login" class="form-control col-4">
                                <br>
                                <label for="perfil" class="font-weight-bold text-warning">Perfil</label>
                                <br>
                                <?php
                                error_reporting(0);
                                $perfil = $usuario["idperfil"];
                                if ($perfil == 1) {
                                    $checkedAdm = "checked";
                                }
                                if ($perfil == 2) {
                                    $checkedPro = "checked";
                                }
                                if ($perfil == 3) {
                                    $checkedAlu = "checked";
                                }
                                ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="idperfil" value="1" <?php echo $checkedAdm; ?>>
                                    <label class="custom-control-label" for="customRadio">Administrador</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="idperfil" value="2" <?php echo $checkedPro; ?>>
                                    <label class="custom-control-label" for="customRadio2">Professor</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="idperfil" value="3" <?php echo $checkedAlu; ?>>
                                    <label class="custom-control-label" for="customRadio2">Aluno</label>
                                </div>
                                <br>
                                <br>
                                <br>
                                <a class="btn btn-light" href="listarAllUsuario.php">Voltar</a>
                                <button type="reset" class="btn btn-warning">Limpar</button>
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
