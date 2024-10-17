<?php

require_once 'conexao/conexao.php';

class diarioDAO {

    //put your code here]

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(diarioDTO $diarioDTO) {
        try {
            $sql = "INSERT INTO diario (frequencia, datacadastro, ativo, idusuario, id_disciplina)
 VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $diarioDTO->getFrequencia());
            $stmt->bindValue(2, $diarioDTO->getDatacadastro());
            $stmt->bindValue(3, $diarioDTO->getAtivo());
            $stmt->bindValue(4, $diarioDTO->getIdusuario());
            $stmt->bindValue(5, $diarioDTO->getId_disciplina());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM diario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $diarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $diarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // SELECT TODOS DE UM USUÁRIO E DE UMA DISCIPLINA
       public function selecionadiariobyid($idusuario, $id_disciplina) {
        try {
            $sql = "SELECT * FROM diario where idusuario=$idusuario and id_disciplina=$id_disciplina;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $diarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $diarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    //SELECT UNICO
    public function selecionaID($id_diario) {
        try {
            $sql = "SELECT * FROM diario where id_diario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_diario);
            $stmt->execute();
            $diario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $diario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($id_diario) {
        try {
            $sql = "DELETE FROM diario where id_diario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_diario);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(diarioDTO $diarioDTO) {
        try {
            $sql = "UPDATE diario SET frequencia=?, datacadastro=?, idusuario=?, id_disciplina=?
                                WHERE id_diario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $diarioDTO->getFrequencia());
            $stmt->bindValue(2, $diarioDTO->getDatacadastro());
            $stmt->bindValue(3, $diarioDTO->getIdusuario());
            $stmt->bindValue(4, $diarioDTO->getId_disciplina());
            $stmt->bindValue(5, $diarioDTO->getId_diario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
