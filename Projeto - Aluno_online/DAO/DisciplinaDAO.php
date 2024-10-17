<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class disciplinaDAO
class disciplinaDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(disciplinaDTO $disciplinaDTO) {
        try {
            $sql = "INSERT INTO disciplina (disciplina, ativo, idcurso)
 VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $disciplinaDTO->getDisciplina());
            $stmt->bindValue(2, $disciplinaDTO->getAtivo());
            $stmt->bindValue(3, $disciplinaDTO->getIdcurso());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM disciplina inner join curso on disciplina.idcurso=curso.idcurso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $disciplinas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $disciplinas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($id_disciplina) {
        try {
            $sql = "SELECT * FROM disciplina where id_disciplina=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_disciplina);
            $stmt->execute();
            $disciplina = $stmt->fetch(PDO::FETCH_ASSOC);
            return $disciplina;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($id_disciplina) {
        try {
            $sql = "DELETE FROM disciplina where id_disciplina=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_disciplina);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(disciplinaDTO $disciplinaDTO) {
        try {
            $sql = "UPDATE disciplina SET disciplina=?, ativo=?, idcurso=?
                                WHERE id_disciplina=?";
            $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $disciplinaDTO->getDisciplina());
            $stmt->bindValue(2, $disciplinaDTO->getAtivo());
            $stmt->bindValue(3, $disciplinaDTO->getIdcurso());
            $stmt->bindValue(4, $disciplinaDTO->getId_disciplina());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
