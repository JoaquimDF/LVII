<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class perfilDAO
class perfilDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(PerfilDTO $perfilDTO) {
        try {
            $sql = "INSERT INTO perfil (perfil)
 VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $perfilDTO->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM usuario
                   inner join perfil on idperfil=idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaPerfil() {
        try {
            $sql = "select * from perfil
                where idperfil!=1;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idperfil) {
        try {
            $sql = "SELECT * FROM perfil where idperfil=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idperfil);
            $stmt->execute();
            $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idperfil) {
        try {
            $sql = "DELETE FROM perfil where idperfil=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idperfil);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(PerfilDTO $perfilDTO) {
        try {
            $sql = "UPDATE perfil SET perfil=?,
                                idperfil=?
                                WHERE idperfil=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $perfilDTO->getPerfil());
            $stmt->bindValue(2, $perfilDTO->getIdPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
