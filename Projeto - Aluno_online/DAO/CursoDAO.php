<?php

require_once 'conexao/conexao.php';
class cursoDAO {
    //put your code here]
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(cursoDTO $cursoDTO) {
        try {
            $sql = "INSERT INTO curso (curso, ativo)
 VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursoDTO->getCurso());
            $stmt->bindValue(2, $cursoDTO->getAtivo());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM curso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cursos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        public function selecionaCurso() {
        try {
            $sql = "select * from curso;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cursos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idcurso) {
        try {
            $sql = "SELECT * FROM curso where idcurso=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->execute();
            $curso = $stmt->fetch(PDO::FETCH_ASSOC);
            return $curso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        public function selecionanome($idcurso) {
        try {
            $sql = "SELECT curso FROM curso where idcurso=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->execute();
            $curso = $stmt->fetch(PDO::FETCH_ASSOC);
            return $curso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idcurso) {
        try {
            $sql = "DELETE FROM curso where idcurso=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(cursoDTO $cursoDTO) {
        try {
            $sql = "UPDATE curso SET curso=?, ativo=?
                                WHERE idcurso=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursoDTO->getCurso());
            $stmt->bindValue(2, $cursoDTO->getAtivo());
            $stmt->bindValue(3, $cursoDTO->getIdcurso());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
