<?php
    include 'src/conexao.php';

    # chamando um método estático sem atributos
    echo "<p>Chamando meu método estático: " . Conexao::minhaString() . "</p>";

    # chamando um método estático que usa um atributo estatico
    echo "<p>Meu endereço de servidor: " . Conexao::$servidor . "</p>";
    
    # chamando um método estático que usa um atributo estatico privado
    echo "<p>Minha string de conexao: " . Conexao::minhaConexao() . "</p>";
