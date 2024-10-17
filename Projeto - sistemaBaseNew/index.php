<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Login</title>
    </head>
    <body class="bg-dark">
    <center>
        <div class="container">
            <div id="divlogin" style="margin-top: 50px;background-color: white">
                <br>
                <img src="imagens/logoetc.png" alt="Logo" class="rounded" width="150">
                <div class="card" style="width: 300px;">
                    <div class="card-header bg-dark text-white font-weight-bold">Login<br></div>
                    <div class="card-body">
                        <form action="controller/loginController.php" method="post" id="formlogin">
                            <label for="usuario"></label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite Usuário" required="">
                            <br>
                            <label for="senha"></label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite Senha" required="">
                            <br>
                            <button class="btn btn-outline-dark float-left" type="submit">Entrar</button>
                        </form> 
                    </div> 
                </div>
                <br>
                <br>
            </div>
        </div>
    </center>
<br>
    <center>
        <?php if (!empty($_GET["msg"])) { ?>
            <div class = "alert bg-danger text-white alert-dismissible" style="width: 330px">
                <button type = "button" class = "close" data-dismiss = "alert">&times;
                </button>
                <strong>Atenção!<br></strong>  <?php echo $_GET["msg"]; ?>.
            </div>
        <?php }
        ?>
    </center>
    <?php
    include './footer.php';
    ?>
</body>
</html>
