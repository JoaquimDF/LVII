<?php
    require 'conta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco ETC</title>
</head>
<body>
    <main class="principal">
        <h1>Banco ETC</h1>
        <h2>Abrir Conta</h2>
        <hr>
        <section class="secao__formulario">
            <fieldset>
                <legend>Informações sobre a conta</legend>
                <form method="get">
                    <input type="text" name="numero" placeholder="Informe o número da conta." required autofocus><br><br>
                    <input type="text" name="cliente" placeholder="Informe o nome do cliente da conta." size="30" required><br><br>
                    <input type="text" name="numero" placeholder="Informe o saldo inicial." required><br><br>
                    <input type="submit" value="Salvar" name="botaoSalvar">
                </form>
            </fieldset>            
        </section>
     </main>
</body>
</html>
