<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../dao/usuarioDAO.php';
        $idusuario = $_GET["id"];
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->selecionaID($idusuario);
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Editar de Usuário</div>
            </div>
            <br>
            <div class="jumbotron">
                <form action="../controller/alterarUsuarioController.php" method="post">
                    <input type="hidden" name="idusuario" value="<?php echo $usuario["idusuario"] ?>">
                    <div class="card-group">
                        <div class="card bg-dark">
                            <div class="card-body text-white">
                                <label for="usuario" class="font-weight-bold text-warning">Usuário</label>
                                <input type="text" name="usuario" value="<?php echo $usuario["usuario"] ?>"id="usuario" class="form-control col-4">
                                <br>
                                <label for="perfil" class="font-weight-bold text-warning">Perfil</label>
                                <br>
                                <?php
                                error_reporting(0);
                                $perfil = $usuario["perfil_idperfil"];
                                if ($perfil == 1) {
                                    $checkedAdm = "checked";
                                }
                                if ($perfil == 2) {
                                    $checkedUsu = "checked";
                                }
                                ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="perfil_idperfil" value="1" <?php echo $checkedAdm; ?>>
                                    <label class="custom-control-label" for="customRadio">Administrador</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="perfil_idperfil" value="2" <?php echo $checkedUsu; ?>>
                                    <label class="custom-control-label" for="customRadio2">Usuário</label>
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
