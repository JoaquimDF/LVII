<!DOCTYPE html>
<?php   include_once '../JS/funcaoData.php' ?>
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
                <?php
                require_once '../DAO/usuarioDAO.php';
                require_once '../DAO/diarioDAO.php';
                $datacadastro = $_GET["datacadastro"];
                ?>
                <div class="card-body" style="font-size: 15pt;"">Cadastro de Diário - <?php echo dateUStoDateBR($datacadastro) ;?></div>
            </div>
            <br>
            <div class="jumbotron">
                <div class="card-group">
                    <div class="card bg-dark">
                        <div class="card-body text-white">
                            <div class="table-container">
                                <table class="table table-borderless table-hover table-dark" border="1">
                                    <tr>
                                        <td>
                                            <?php
                                            require_once '../DAO/usuarioDAO.php';
                                            require_once '../DAO/diarioDAO.php';
                                            $id_disciplina = $_GET["id_disciplina"];
//                                            $datacadastro = $_GET["datacadastro"];
                                            $usuarioDAO = new usuarioDAO();
                                            $aluno = $usuarioDAO->selecionaAlunosDiario($id_disciplina, $datacadastro);
                                            foreach ($aluno as $A) {
                                                $nome = $A["nome"];
                                                $disciplina = $A["disciplina"];
                                                $idusuario = $A["IDUSUARIO"];
                                                $datadiario = $A["datacadastro"];
                                                $id_diario = $A["id_diario"]
                                                ?>
                                                <?php if ($datacadastro == $datadiario) { ?>
                                                    <form action='../CONTROLLER/alterarDiarioController.php' method='post'>
                                                        <input type="hidden" name="id_diario" value="<?= $id_diario ?>">
                                                        <input type="hidden" name="id_disciplina" value="<?= $id_disciplina ?>">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td style="text-align: left;" width="70%">
                                                                    <input type='hidden' name='idusuario' value='<?= $idusuario ?>'>
                                                                    <?= "<b>Nome:</b> " . $nome ?> 
                                                                </td>

                                                                <?= "<input type='hidden' name='datacadastro' value='$datacadastro'>" ?>
                                                                <td>
                                                                    <?php
                                                                    if ($A["frequencia"] == 1) {
                                                                        echo "Presença <input type='radio' checked name='frequencia' value='1'/></td>";
                                                                        echo "<td>Falta <input type='radio' name='frequencia' value='0'/>";
                                                                    } else {
                                                                        echo "Presença <input type='radio' name='frequencia' value='1'/></td>";
                                                                        echo "<td>Falta <input type='radio' checked name='frequencia' value='0'/>";
                                                                    }
                                                                    ?>
                                                                </td>

                                                                <td>
                                                                    <button type="submit">Alterar</button>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </form>
                                                <?php } else { ?>
                                                    <form action='../CONTROLLER/cadastraDiarioController.php' method='post'>
                                                        <input type="hidden" name="id_disciplina" value="<?= $id_disciplina ?>">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td style="text-align: left;" width="70%">
                                                                    <input type='hidden' name='idusuario' value='<?= $idusuario ?>'>
                                                                    <?= "<b>Nome:</b> " . $nome ?> 
                                                                </td>

                                                                <?= "<input type='hidden' name='datacadastro' value='$datacadastro'>" ?>
                                                                <td>
                                                                    <?php
                                                                    if ($A["frequencia"] == 1) {
                                                                        echo "Presença <input type='radio' checked name='frequencia' value='1'/></td>";
                                                                        echo "<td>Falta <input type='radio' name='frequencia' value='0'/>";
                                                                    } else {
                                                                        echo "Presença <input type='radio' name='frequencia' value='1'/></td>";
                                                                        echo "<td>Falta <input type='radio' checked name='frequencia' value='0'/>";
                                                                    }
                                                                    ?>
                                                                </td>

                                                                <td>
                                                                    <button type="submit">Registrar</button>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </form>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
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
