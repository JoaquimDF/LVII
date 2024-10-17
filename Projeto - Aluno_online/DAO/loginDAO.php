<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($login,$senha) {
        try {
            $sql = "SELECT u.login,u.idusuario,p.perfil FROM usuario u
                    INNER JOIN perfil p ON (u.idperfil = p.idperfil)
                    WHERE login=? AND senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
