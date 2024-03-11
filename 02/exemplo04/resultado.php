<?php
    if (isset($_GET['email']) && !empty($_GET['email']))
    {
        $email = $_GET['email'];
        echo "<p>O e-mail enviado foi: <b>$email</b>.</p>";
    } else {
        echo "<p>O campo e-mail não foi enviado ou está vazio.</p>";        
    }     
?> 
<a href="index.php">Voltar</a>
