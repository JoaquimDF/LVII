<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com método POST</title>
</head>
<body>
    <h1>Enviando dados via POST</h1>
    <form action="resultado.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="Informe seu e-mail." autofocus>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
