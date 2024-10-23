<?php
require_once __DIR__ . '/../../src/conexao.php';
require_once __DIR__ . '/../dto/usuariodto.php';

class UsuarioDAO
{
    private $dbh;
    public function __construct()
    {
        $this->dbh =  Conexao::getConexao();
    }

    // INSERIR USUÁRIOS
    public function newInsert(UsuarioDTO $usuarioDTO)
    {
        try{
        $query = "INSERT INTO escolabd.usuarios (nome, email, password, status, perfil_id) 
            VALUES (:nome, :email, :password, :status, :perfil_id);";

        $stmt = $this->dbh->prepare($query);
      
        $nomeUsu = $usuarioDTO->getNome();
        $emailUsu = $usuarioDTO->getEmail();
        $passwordUsu = $usuarioDTO->getPassword();
        $statusUsu = $usuarioDTO->getStatus();
        $perfilUsu = $usuarioDTO->getPerfilId();

        $stmt->bindParam(':nome', $nomeUsu);
        $stmt->bindParam(':email', $emailUsu);
        $stmt->bindParam(':password', $passwordUsu);
        $stmt->bindParam(':status', $statusUsu);
        $stmt->bindParam(':perfil_id', $perfilUsu);
        
        $result = $stmt->execute();
        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
    }

    //LISTAR USUÁRIOS
    public function getAll()
    {
        try {
        $query = "SELECT * FROM escolabd.usuarios;";

        $stmt = $this->dbh->prepare($query);
        
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
        
        }catch (PDOException $exc) {
        echo $exc->getMessage();
         }
        $this->dbh = null;
    }

    //EXCLUIR USUÁRIOS
    public function delete($id)
    {
        try{
        $query = "DELETE FROM escolabd.usuarios WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->rowCount();
        $this->dbh = null;

        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
    }

	//ALTERAR USUÁRIOS
    public function update(UsuarioDTO $usuarioDTO)
    {
        try{
        $query = "UPDATE escolabd.usuarios SET 
            nome = :nome,
            email = :email,
            `status` = :status,
            perfil_id = :perfil_id 
            WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);

        $idUsu = $usuarioDTO->getId();
        $nomeUsu = $usuarioDTO->getNome();
        $emailUsu = $usuarioDTO->getEmail();
        $statusUsu = $usuarioDTO->getStatus();
        $perfilUsu = $usuarioDTO->getPerfilId();

        $stmt->bindParam(':id', $idUsu);
        $stmt->bindParam(':nome', $nomeUsu);
        $stmt->bindParam(':email', $emailUsu);
        $stmt->bindParam(':status', $statusUsu);
        $stmt->bindParam(':perfil_id', $perfilUsu);

        $result = $stmt->execute();
        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
    }

    //PesquisarUsuarioPorId
    public function getById($id)
    {
        try{
        $query = "SELECT * FROM escolabd.usuarios WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        return $row;
        
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    $this->dbh = null;
    }

	// MD5('123') VALIDAR LOGIN
    public function login($email, $password)
    {
        $query = "SELECT id, nome, email, perfil_id 
            FROM escolabd.usuarios 
            WHERE email = :email
            AND password = :password;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;
    }
}