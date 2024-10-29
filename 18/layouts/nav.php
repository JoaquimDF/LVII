<nav>
    <a href="../../index.php">Home</a>
    <a href="../../view/usuarios/index.php">Usuários</a>
    <a href="../../view/perfis/index.php">Perfil</a>
    <?php 
        session_start();
        // var_dump($_SESSION['usuario']);exit;
        if (isset($_SESSION['usuario'])) {
            echo '<a href="../auth/logout.php">Log out</a>';
        }
    ?>
</nav>