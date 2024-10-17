<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="bootstrap/assets/img/favicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Redefinição de Senha</title>
        <!-- Custom fonts for this template-->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="bootstrap/assets/css/sb-admin-2.css" rel="stylesheet">
        <link href="bootstrap/assets/img/favicon.png" rel="icon">
    </head>
    <style>
        body {
            background-image: url("bootstrap/assets/img/background.jpg");
            background-size: 100%;
        }
    </style>
    <body class="bg-dark">
        <?php
            $idUsuario = $_GET["id"];
        ?>
    <center>
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Redefina sua Senha!</h1>
                                        </div>
                                        <form name="formRedSenha" action="controller/redefinicaoSenhaController.php" method="post" id="formRedSenha">   
                                            <input type="text" name="idUsuario" value="<?php echo $idUsuario ?>" hidden>
                                            <div class="form-group">
                                                <input type="password" name="senha" id="senha" class="form-control form-control-user" placeholder="Digite a nova senha" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="senhaConf" id="senhaConf" class="form-control form-control-user" placeholder="Confirme a nova senha" required="">
                                            </div>
                                             <input class="inlineBlock h40" type="submit" value="Cadastrar Nova Senha">
                                        </form>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </center>
    <br>
    <center>

        <?php if (!empty($_GET["msg"])) { ?>
            <div class="alert bg-danger text-white alert-dismissible" style="width: 330px">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>Atenção!<br></strong> <?php echo $_GET["msg"]; ?>.
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
        <?php } ?>

    </center>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
