<?php

// Conexão com o BD
require_once 'Conexao/Conexao.php';


class disciplina_has_usuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(disciplina_has_usuarioDTO $disciplina_has_usuarioDTO) {
        try {
            $sql = "INSERT INTO disciplina_has_usuario (id_disciplina, idusuario, datacadastro)  VALUES (?,?,?)";

            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $disciplina_has_usuarioDTO->getId_disciplina());
            $stmt->bindValue(2, $disciplina_has_usuarioDTO->getidusuario());
            $stmt->bindValue(3, $disciplina_has_usuarioDTO->getdatacadastro());
            return $stmt->execute();
                    
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM disciplina_has_usuario Dhu
                    inner join usuario u on u.idusuario=dhu.idusuario
                    inner join disciplina d on d.id_disciplina=dhu.id_disciplina;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $disciplina_has_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $disciplina_has_usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        //SELECT UNICO com nome
    public function selecionainformacoes($id_dhu) {
        try {
            $sql = "SELECT * FROM disciplina_has_usuario dhu 
                    inner join usuario u on dhu.idusuario=u.idusuario where id_dhu=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_dhu);
            $stmt->execute();
            $disciplina_has_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $disciplina_has_usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($id_dhu) {
        try {
            $sql = "SELECT * FROM disciplina_has_usuario where id_dhu=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_dhu);
            $stmt->execute();
            $disciplina_has_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $disciplina_has_usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($id_dhu) {
        try {
            $sql = "DELETE FROM disciplina_has_usuario where id_dhu=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id_dhu);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(disciplina_has_usuarioDTO $disciplina_has_usuarioDTO) {
        try {
            $sql = "UPDATE disciplina_has_usuario SET id_disciplina=?, datacadastro=?
                                WHERE id_dhu=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $disciplina_has_usuarioDTO->getId_disciplina());
            $stmt->bindValue(2, $disciplina_has_usuarioDTO->getDatacadastro());
            $stmt->bindValue(3, $disciplina_has_usuarioDTO->getId_dhu());
                    
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
