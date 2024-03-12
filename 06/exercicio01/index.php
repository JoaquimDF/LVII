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
        <figure>
            <img class="logo" src="assets/image/logo-etc.png" alt="Imagem logo da ETC">
        </figure>
        <h1><a href="/">Banco ETC</a></h1>

        <h2>Escolha uma das opções</h2>

        <section class="secao__opcao__botao">
            <a href="abrirconta.php">Abrir Conta</a>
            <a href="#">Verificar Saldo</a>
            <a href="#">Sacar</a>
            <a href="#">Depositar</a>
        </section>

        <section class="secao__informacao__cliente">
            
            <h2>Informações sobre Conta</h2>

            <hr>
             
            <div>
                <p>Cliente</p>
                <p>Número</p>
                <p>Saldo</p>
            </div>
        </section>
    </main>
</body>
</html>
