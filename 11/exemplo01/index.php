<?php
    $dbh = new PDO("mysql:host=localhost;dbname=aula11", "root", "");
    echo 'Conexão com sucesso!';
    $dbh = null;
