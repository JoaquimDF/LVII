<?php
    require 'conta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco ETC</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="principal">
        <h1><a href="/">Banco ETC</a></h1>
<!-- https://www.w3schools.com/w3css/w3css_input.asp -->
        <h2>Abrir Conta</h2>
        <hr>
        <section class="secao__formulario">
            <form method="get">
                <input type="text" name="numero" placeholder="Informe o número da conta." required autofocus><br>
                <input type="text" name="cliente" placeholder="Informe o nome do cliente da conta." size="30" required><br>
                <input type="text" name="numero" placeholder="Informe o saldo inicial." required><br><br>
                <input type="submit" value="Salvar" name="botaoSalvar">
            </form>
        </section>
     </main>
</body>
</html>
