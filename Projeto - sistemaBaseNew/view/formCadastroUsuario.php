<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Cadastro de Usuário</div>
            </div>
            <br>
            <div class="jumbotron">
                <form action="../controller/cadastraUsuarioController.php" method="post">
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="usuario" class="font-weight-bold text-warning">Usuário</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                                <br>
                                <label for="perfil" class="font-weight-bold text-warning">Perfil</label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="perfil_idperfil" value="1">
                                    <label class="custom-control-label" for="customRadio">Administrador</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="perfil_idperfil" value="2">
                                    <label class="custom-control-label" for="customRadio2">Usuário</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio3" name="perfil_idperfil" value="3">
                                    <label class="custom-control-label" for="customRadio3">Cliente</label>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="senha" class="font-weight-bold text-warning">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control col-4">
                                <br>
                                <button type="reset" class="btn btn-warning">Limpar</button>
                                <button type="submit" class="btn btn-success">Cadastrar</button>
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
