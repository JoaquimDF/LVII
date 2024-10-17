<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Home</title>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        if (isset($_SESSION["usuario"])) {
            echo "Usuário logado: ", $_SESSION["usuario"];
            echo "<br>";
            echo "Perfil: ", $_SESSION["perfil"];
        }
        ?> 
        <table width="100%" border="1">
            <tr>
                <td>
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            ?>
                            <a href="formCadastroUsuario.php" target="centro">Cadastrar Usuário</a> |
                            <a href="listarAllUsuario.php" target="centro">Listar Usuário</a> |
                            <a href = "formCadastrarCliente.php" target="centro">Cadastrar Cliente</a> |
                            <a href = "listarAllCliente.php" target="centro">Listar Clientes</a> |
                            <?php
                            break;
                        case "Usuario":
                           
                            break;
                        case "Cliente":
                          
                            break;
                    }
                    ?>
                    <a href="../controller/logoffController.php" >Sair</a>
                </td>
            </tr>
        </table>
        <table id="tablehome" border="1">
            <tr>         
                <td valign="top">
                    <iframe name="centro" src="" width="600" height="400" frameborder="0"></iframe>
                </td>
            </tr>                
        </table>
        <?php include '../footer.php'; ?>
    </body>
</html>
