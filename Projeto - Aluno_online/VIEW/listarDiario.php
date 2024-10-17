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
    <?php 
        $idusuario = $_GET["idusuario"];
        $id_disciplina = $_GET["id_disciplina"];
        $nome = $_GET["nome"];
    ?>
    <body style="background-color: #2d3674ff">
        <br><br>
        <?php
        // Listar Todos os  CURSOS
        require_once '../dao/diarioDAO.php';        
        $diarioDAO = new diarioDAO();
        $diarios = $diarioDAO->selecionadiariobyid($idusuario,$id_disciplina);

        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Lista de Frequencia ( <?=$nome?> )</div>
            </div>
            <br>
            <div class="table-container">
                <table class="table table-borderless table-hover table-dark" border="1">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Presença</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($diarios as $d) {
                            $id_diario = $d["id_diario"];
                            $datacadastro = $d["datacadastro"];
                            $frequencia = $d["frequencia"];
                            ?>
                            <tr>
                                <td><?php echo dateUStoDateBR($datacadastro) ;?></td>
                                <?php if($frequencia==0){?>
                                <td>Falta</td>
                                
                                <?php }else{?>
                                <td>Presença</td>               
                                <?php }?>
                            </tr>
                                <?php }
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-light" href="formSelecionarLista.php">Voltar</a>
            </div>
        </div>
    </body>
</html>
