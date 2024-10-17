<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <?php
    require_once '../dao/clienteDAO.php';
    include '../js/funcaoData.php';
    
    $idcliente = $_GET["id"];
    $clienteDAO = new ClienteDAO();
    $cliente = $clienteDAO->getClienteById($idcliente);
   
    ?>
    <body>
        <form action="../controller/alterarClienteController.php" method="post">
            <input type="hidden" name="idcliente" value="<?php echo $cliente["idcliente"]?>"/>
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $cliente["nome"] ?>" name="nome" size="50"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" value="<?php echo $cliente["cpf"]?>" name="cpf"/></td>
                </tr>                
                <tr>
                    <td>RG:</td>
                    <td><input type="text" value="<?php echo $cliente["rg"]?>" name="rg"/></td>
                </tr>                                
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="text" value="<?php echo dateUStoDateBR($cliente["datanascimento"])?>" name="datanascimento"/></td>
                </tr>                                                
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <?php
                        if ($cliente["sexo"] == "masc"){
                            echo "Masculino <input type='radio' checked name='sexo' value='masc'/>";
                            echo "Feminino <input type='radio' name='sexo' value='fem'/>";
                        }else{
                            echo "Masculino <input type='radio' name='sexo' value='masc'/>";
                            echo "Feminino <input type='radio' checked name='sexo' value='fem'/>";
                        }
                        ?>
                        
                    </td>
                </tr>                                
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" value="<?php echo $cliente["endereco"]?>" size="60" name="endereco"/></td>
                </tr>                                                
                <tr>                    
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>
