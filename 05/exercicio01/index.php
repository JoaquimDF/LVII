<?php

    # incluindo arquivo da classe Usuarios.
    require 'usuarios.php';

    $usuario01 = new Usuarios();
    $usuario01->nome = "Rubens";
    echo "<p>O nome do usuário é: <b>{$usuario01->nome}</b></p>";

    $usuario02 = new Usuarios();
    $usuario02->nome = "Maria";
    echo "<p>O nome do usuário é: <b>{$usuario02->nome}</b></p>";
