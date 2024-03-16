<?php

require 'usuario.php';

$usuario01 = new Usuario();

$usuario02 = new Usuario();

$usuario01->nome = "Rubens";

$usuario02->nome = "Maria";

echo "O nome da pessoa 01 é: {$usuario01->nome}";
echo "<br>";
echo "O nome da pessoa 02 é: {$usuario02->nome}";
