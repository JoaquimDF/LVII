<?php
include "../src/conexao.php";
require_once "../model/DTO/UsuarioDTO.php";

class UsuarioDAO
{
    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
       
        try {
            $sql = "INSERT INTO usuarios (nome,email,password,status) 
            VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeUsuario = $usuarioDTO->getNome();
            $emailUsu = $usuarioDTO->getEmail();
            $passwordUsu = $usuarioDTO->getPassword();
            $statusUsu = $usuarioDTO->getStatus();
            
            $stmt->bindValue(1, $nomeUsuario);
            $stmt->bindValue(2, $emailUsu);
            $stmt->bindValue(3, $passwordUsu);
            $stmt->bindValue(4, $statusUsu);

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    

    //LISTAR USUÁRIOS
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuarios ";
            $stmt = $this->pdo->prepare($sql);
         
            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
//excluir usuários
    public function excluirUsuario($idUsuario) {
            try {
                $sql = "DELETE FROM usuarios
                WHERE idUsu = ?";
                
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $idUsuario);
                
                $retorno = $stmt->execute();
               
                return $retorno;
             } catch (PDOException $exc) {
                echo $exc->getMessage();
                
             }
          }

    public function alterarUsuario(UsuarioDTO $usuarioDTO)
    {

        try {
            $sql = "UPDATE usuario1 SET nomeUsu=?
            WHERE idUsu= ?";
            $stmt = $this->pdo->prepare($sql);

            $idUsuario = $usuarioDTO->getIdUsu();
            $nomeUsuario = $usuarioDTO->getNomeUsu();

            $stmt->bindValue(1, $nomeUsuario);
            $stmt->bindValue(2, $idUsuario);

            $retorno =  $stmt->execute();

            if($retorno){
                echo "Sucesso";
            }else{
                echo "erro";
            }

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();           
        }
    }

    //PesquisarUsuarioPorId
 public function pesquisarUsuarioPorId($idUsuario) {
    try {
        $sql = "SELECT * FROM usuarios WHERE idUsu = {$idUsuario}; ";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
		  $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $retorno;
     } catch (PDOException $exc) {
        echo $exc->getMessage();  
     }
  }
//
// MD5('123')
public function validarLogin($emailUsu,$passwordUsu) {
    //echo "{$emailUsu}";
    //echo "{$senhaUsu}";
    try {
        $sql = "SELECT * FROM usuarios WHERE emailUsu = '{$emailUsu}' AND
         senhaUsu = '{$senhaUsu}'; ";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
		  $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $retorno;
     } catch (PDOException $exc) {
        echo $exc->getMessage();  
     }
  }

}