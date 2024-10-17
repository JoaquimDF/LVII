<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class usuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "INSERT INTO usuario (nome, matricula, datanascimento, endereco, email, cpf, nomeresponsavel, login, senha, ativo, idperfil)
 VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getMatricula());
            $stmt->bindValue(3, $usuarioDTO->getDatanascimento());
            $stmt->bindValue(4, $usuarioDTO->getEndereco());
            $stmt->bindValue(5, $usuarioDTO->getEmail());
            $stmt->bindValue(6, $usuarioDTO->getCpf());
            $stmt->bindValue(7, $usuarioDTO->getNomeResponsavel());
            $stmt->bindValue(8, $usuarioDTO->getLogin());
            $stmt->bindValue(9, $usuarioDTO->getSenha());
            $stmt->bindValue(10, $usuarioDTO->getativo());
            $stmt->bindValue(11, $usuarioDTO->getIdPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //Update de senha
    
    public function alterarSenha(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET senha=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getSenha());
            $stmt->bindValue(2, $usuarioDTO->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM usuario inner join perfil on usuario.idperfil=perfil.idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        //SELECT COUNT FALTAS
    public function selecionaFaltas($idusuario,$id_disciplina) {
        try {
            $sql = "SELECT COUNT(*) as faltas FROM diario WHERE idusuario=? and id_disciplina=? and frequencia=0;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->bindValue(2, $id_disciplina);
            $stmt->execute();
            $faltas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $faltas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //select para retornar usuário sem senha

    public function retornaUsuarioSemSenha($email, $cpf, $dataNascimento) {
        try {
            $sql = "SELECT * FROM usuario where email=? AND cpf=? AND datanascimento=?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $cpf);
            $stmt->bindValue(3, $dataNascimento);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT PROFESSOR
    public function selecionaProfessorbyId() {
        try {
            $sql = "SELECT * FROM usuario where idPerfil = 2;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $professores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $professores;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT aluno
    public function selecionaAlunosbyId() {
        try {
            $sql = "SELECT * FROM usuario where idPerfil = 3;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $alunos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT DIARIO
    public function selecionaAlunosDiario($id_disciplina, $datacadastro) {
        try {
            $dataHoje = $datacadastro;

            $sql = "SELECT *,U.idusuario as IDUSUARIO FROM usuario U 
            INNER JOIN disciplina_has_usuario DU ON DU.idusuario = U.idusuario
            INNER JOIN disciplina D ON D.id_disciplina = DU.id_disciplina
            LEFT JOIN diario Di ON Di.idusuario = U.idusuario AND Di.id_disciplina = D.id_disciplina AND Di.datacadastro = '$dataHoje'
            WHERE D.id_disciplina = $id_disciplina;";          
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $alunos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        //SELECT NOTAS
    public function selecionaAlunosNotas($id_disciplina) {
        try {
            $sql = "SELECT *,U.idusuario as IDUSUARIO , n.ativo AS ATIVO
            FROM usuario U 
            INNER JOIN disciplina_has_usuario DU ON DU.idusuario = U.idusuario
            INNER JOIN disciplina D ON D.id_disciplina = DU.id_disciplina
            LEFT JOIN notas n ON n.idusuario = U.idusuario AND n.id_disciplina = D.id_disciplina
            WHERE D.id_disciplina = $id_disciplina;";          
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $alunos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
            //SELECT NOTAS
    public function selecionaAlunosTotal($disciplina) {
        try {
            $sql = "SELECT *,U.idusuario as IDUSUARIO
            FROM usuario U 
            INNER JOIN disciplina_has_usuario DU ON DU.idusuario = U.idusuario
            INNER JOIN disciplina D ON D.id_disciplina = DU.id_disciplina
            LEFT JOIN notas n ON n.idusuario = U.idusuario AND n.id_disciplina = D.id_disciplina
            WHERE D.id_disciplina = '$disciplina';";          
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $alunos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //SELECT UNICO
    public function selecionaID($idusuario) {
        try {
            $sql = "SELECT * FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaLogin($login) {
        try {
            $sql = "SELECT * FROM usuario where login=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idusuario) {
        try {
            $sql = "DELETE FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    //DESABILITAR 
    public function desabilitar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET ativo=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getAtivo());
            $stmt->bindValue(2, $usuarioDTO->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
        //REABILITAR 
    public function reabilitar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET ativo=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getAtivo());
            $stmt->bindValue(2, $usuarioDTO->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET login=?,idperfil=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getLogin());
            $stmt->bindValue(2, $usuarioDTO->getIdPerfil());
            $stmt->bindValue(3, $usuarioDTO->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//    public function alterar(usuarioDTO $usuarioDTO) {
//        try {
//            $sql = "UPDATE usuario SET nome=?, matricula=?, datanascimento=?, endereco=?, email=?, cpf=?, nomeresponsavel=?, login=?, senha=?, ativo=?, idperfil=?
//                                WHERE idusuario=?";
//            $stmt = $this->pdo->prepare($sql);
//           $stmt->bindValue(1, $usuarioDTO->getNome());
//            $stmt->bindValue(2, $usuarioDTO->getMatricula());
//            $stmt->bindValue(3, $usuarioDTO->getDatanascimento());
//            $stmt->bindValue(4, $usuarioDTO->getEndereco());
//            $stmt->bindValue(5, $usuarioDTO->getEmail());
//            $stmt->bindValue(6, $usuarioDTO->getCpf());
//            $stmt->bindValue(7, $usuarioDTO->getNomeResponsavel());
//            $stmt->bindValue(8, $usuarioDTO->getLogin());
//            $stmt->bindValue(9, $usuarioDTO->getSenha());
//            $stmt->bindValue(10, $usuarioDTO->getativo());
//            $stmt->bindValue(11, $usuarioDTO->getIdPerfil());
//            $stmt->bindValue(12, $usuarioDTO->getIdUsuario());
//            return $stmt->execute();
//        } catch (PDOException $exc) {
//            echo $exc->getMessage();
//        }
//    }
}
