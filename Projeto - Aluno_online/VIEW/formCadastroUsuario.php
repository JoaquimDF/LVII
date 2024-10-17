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
                <div class="card-body">Cadastro de Usuário</div>
            </div>
            <br>
            <div class="jumbotron">
                <form action="../CONTROLLER/cadastraUsuarioController.php" method="post">
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">

                                <table>
                                    <tr>
                                        <td>Login:</td>
                                        <td><input type="text" required="" name="login" size="50"/></td>
                                    </tr>
                                    <tr>
                                        <td>Nome:</td>
                                        <td><input type="text" required="" name="nome" size="50"/></td>
                                    </tr>
                                    <tr>
                                        <td>CPF:</td>
                                        <td><input type="text" required="" name="cpf" size="50"/></td>
                                    </tr>          
                                    <tr>
                                        <td>Senha:</td>
                                        <td><input type="password" required="" name="senha" size="50"/></td>
                                    </tr>   
                                    <tr>
                                        <td>Matricula:</td>
                                        <td><input type="text" required="" name="matricula" size="50"/></td>
                                    </tr>                                
                                    <tr>
                                        <td>Data de Nascimento:</td>
                                        <td><input class="form-control input-sm" type="date" required="" name="datanascimento" size="50"/></td>
                                    </tr>                                                
                                    <tr>
                                        <td>Endereço:</td>
                                        <td><input type="text" required=""  name="endereco" size="50"/></td>
                                    </tr>         
                                    <tr>
                                        <td>Email:</td>
                                        <td><input type="text" required="" name="email" size="50""/></td>
                                    </tr>   
                                    <tr>
                                        <td>Nome do Responsável:</td>
                                        <td><input type="text" required="" name="nomeresponsavel" size="50"/></td>
                                    </tr>   


                                </table>
                            </div>
                        </div>
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="perfil" class="font-weight-bold text-warning" size="50">Perfil</label>
                                <select required='' name="idperfil"  class="form-select">
                                    <option value=''>Selecione</option>
                                    <?php
                                    require_once '../DAO/perfilDAO.php';
                                    $PerfilDAO = new perfilDAO();
                                    $pesquisaPerfil = $PerfilDAO->selecionaPerfil();
//                                    echo "<pre>";
//                                    var_dump($pesquisaPerfil);
//                                    echo $pesquisaPerfil;
//                                    die();
//                                    echo "</pre>";
                                    foreach ($pesquisaPerfil as $p) {
                                        $perfil = $p["perfil"];
                                        $idperfil = $p["idperfil"];
                                        echo "<option value='$idperfil'>$perfil</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                <button type="reset" class="btn btn-warning">Limpar</button>
                            </div>
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
