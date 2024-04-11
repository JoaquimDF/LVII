<?php
    $carros = [];    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Carros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gerencidador de Carros</h1>
    <form>
        <fieldset>
            <legend>Nova Carro</legend>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" required autofocus >
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" required>
            <label for="cor">Cor</label>
            <input type="text" name="cor" id="cor" required>
            <label for="combustivel">Combustível</label>
            <select name="combustivel" id="combustivel">
                <option value="Gasolina">Gasolina</option>
                <option value="Alcool">Álcool</option>
                <option value="Disel">Dísel</option>
                <option value="Flex">Flex</option>
            </select>
            <label for="placa">Placa</label>
            <input type="text" name="placa" id="placa" required>
            <label for="ano">Ano</label>
            <input type="number" name="ano" id="ano" value="2000" required>
            <input type="submit" value="Cadastrar">
        </fieldset>

        <h2>Carros</h2>
        <table>
            <thead>
                <tr>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Cor</td>
                    <td>Combustível</td>
                    <td>Placa</td>
                    <td>Ano</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($carros) {
                    foreach($carros as $carro) { ?> 
                    <tr>
                        <td><?=$carro?></td>
                    </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan="6">Não existem carros cadastrados.</td>
                    </tr>    
                <?php } ?>
            </tbody>
        </table>
        
    </form>
</body>
</html>
