<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Listar Todos os  USUÁRIOS
        require_once '../dao/usuarioDAO.php';
        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->selecionaTds();
        ?>
        <div class="container">
            <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Lista de Usuários</div>
            </div>
            <br>
            <table class="table table-borderless table-hover table-dark" border="1">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Perfil</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $u) {
                        $idusuario = $u["idusuario"];
                        $usuario = $u["usuario"];
                        $perfil = $u["perfil"];
                        ?>
                        <tr>
                            <td><?php echo $usuario; ?></td>
                            <td><?php echo $perfil; ?></td>
                            <td class="text-center">
                                <a href="formAlterarUsuario.php?id=<?php echo $idusuario?>">
                                    Alterar
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="../controller/excluirUsuarioByIdController.php?id=<?php echo $idusuario;?>">
                                   Excluir
                                </a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
