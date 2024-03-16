<?php

include 'usuario.php';

$user01 = new Usuario();

$user01->nome = "Joao";

echo "O nome do usuário é: {$user01->nome}";
