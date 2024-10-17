<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/clienteDAO.php';
        include '../js/funcaoData.php';

        $clienteDAO = new ClienteDAO();
        $clientes = $clienteDAO->getAllCliente();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Cpf</th>";
        echo "  <th>Rg</th>";
        echo "  <th>Sexo</th>";
        echo "  <th>Data de Nascimento</th>";
        echo "  <th>endereco</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";


        foreach ($clientes as $c) {
            echo "<tr>";
            echo "  <td>{$c["nome"]}</td>";
            echo "  <td>{$c["cpf"]}</td>";
            echo "  <td>{$c["rg"]}</td>";
            echo "  <td>{$c["sexo"]}</td>";
            echo "  <td>{$c["datanascimento"]}</td>";
            echo "  <td>{$c["endereco"]}</td>";
            echo "  <td><a href='../controller/excluirClienteByIdController.php?id={$c["idcliente"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarCliente.php?id={$c["idcliente"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
