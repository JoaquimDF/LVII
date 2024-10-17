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
        require_once '../dao/disciplina_has_usuarioDAO.php';
        $id_dhu = $_GET["id"];
        $disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
        $dhu = $disciplina_has_usuarioDAO->selecionaID($id_dhu);
        ?>

        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Editar a disciplina do Aluno</div>
            </div>
            <br>
            <div class="jumbotron">


                <form action="../controller/alterarDhUController.php" method="post">
                    <input type="hidden" name="id_dhu" value="<?= $id_dhu ?>">
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">

                                <tr>
                                    
                                <label class='font-weight-bold text-warning'> <?php 
                                require_once '../DAO/disciplina_has_usuarioDAO.php';
                                $disciplina_has_usuarioDAO = new disciplina_has_usuarioDAO();
                                $n = $disciplina_has_usuarioDAO->selecionainformacoes($id_dhu);
                                $nome = $n['nome'];
                                echo $nome;
                                ?> </label>
                                </tr>

                                <br>
                                <br>


                                <tr>
                                <label for="id_disciplina" value="<?php $dhu["id_disciplina"] ?>" class="font-weight-bold text-warning">Disciplina:</label>
                                <td>
                                    <select required='' name="id_disciplina"  class="form-select">
                                        <option value=''>Selecione</option>
                                        <?php
                                        require_once '../DAO/disciplinaDAO.php';
                                        $disciplinaDAO = new disciplinaDAO();
                                        $pesquisaDisciplina = $disciplinaDAO->selecionaTds();
                                        foreach ($pesquisaDisciplina as $d) {
                                            $disciplina = $d["disciplina"];
                                            $id_disciplina = $d["id_disciplina"];
                                            echo "<option value='$id_disciplina'>$disciplina</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <br>
                                <td>
                                    <label class="font-weight-bold text-warning">Data do cadastro:</label>
                                    <?php date_default_timezone_set('America/Sao_Paulo'); ?>
                                    <input class="form-control input-sm" type="date" value="<?php echo date('Y-m-d'); ?>" name="datacadastro">
                                </td>
                                </tr>


                                <br>
                                <br>
                                <br>
                                <a class="btn btn-light" href="listarAllDisciplinaUsuario.php">Voltar</a>
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
