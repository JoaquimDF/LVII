<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class disciplinaDAO
class notasDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(notasDTO $notasDTO) {
        try {
            $sql = "INSERT INTO notas (notas, datacadastro, ativo, idusuario, id_disciplina)
 VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $notasDTO->getNotas());
            $stmt->bindValue(2, $notasDTO->getDatacadastro());
            $stmt->bindValue(3, $notasDTO->getAtivo());
            $stmt->bindValue(4, $notasDTO->getIdusuario());
            $stmt->bindValue(5, $notasDTO->getId_disciplina());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM notas";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $notas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $notas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idnotas) {
        try {
            $sql = "SELECT * FROM notas where idnotas=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idnotas);
            $stmt->execute();
            $notas = $stmt->fetch(PDO::FETCH_ASSOC);
            return $notas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idnotas) {
        try {
            $sql = "DELETE FROM notas where idnotas=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idnotas);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(notasDTO $notasDTO) {
        try {
            $sql = "UPDATE notas SET notas=?
                                WHERE idnotas=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $notasDTO->getNotas());
            $stmt->bindValue(2, $notasDTO->getIdnotas());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
