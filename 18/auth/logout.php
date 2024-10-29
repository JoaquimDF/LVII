<?php
  session_start();

  $usuario = $_SESSION['usuario'] ?? null;
  echo "Usuário logado: ". $_SESSION['nome'];
  if (!$usuario) {
    unset($_SESSION['usuario']);  
  }
  session_destroy();
  header("location: ./index.php");
  exit;
