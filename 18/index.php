<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Home MVC</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>MVC - Básico</h1>
        <p>Exercício introdutório exemplificando o MVC nas tabelas usuários e perfil. </p>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="./view/usuarios/index.php">Usuários</a>
        <a href="./view/perfis/index.php">Perfil</a>

       <!--iniciar sessão -->
        <?php session_start();
        if (isset($_SESSION['usuario'])) : ?>
            <a href="auth/logout.php"> Log out</a>
        <?php endif; ?>
    </nav>

</body>
</html>