<?php
require_once __DIR__ . '/../../src/conexao.php';
require_once __DIR__ . '/../dto/perfildto.php';

class PerfilDAO
{
    private $dbh;
    public function __construct()
    {
        $this->dbh =  Conexao::getConexao();
    }

    // INSERIR PERFIL
    public function new(PerfilDTO $perfilDTO)
    {
        try{
        $query = "INSERT INTO escolabd.perfis (nome) 
            VALUES (:nome);";

        $stmt = $this->dbh->prepare($query);

        $perfilUsu = $perfilDTO->getNome();

        $stmt->bindParam(':nome', $perfilUsu);

        $result = $stmt->execute();
        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
    }

    // LISTAR PERFIL
    public function getAll()
    {
        try {
        $query = "SELECT * FROM escolabd.perfis;";

        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();

        return $rows;
        }catch (PDOException $exc) {
        echo $exc->getMessage();
         }
        $this->dbh = null;
    }

    // EXCLUIR PERFIL
    public function delete(int $id): int
    {
        try{
        $query = "DELETE FROM escolabd.perfis WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = (int) $stmt->rowCount();
 
        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
}

	//ALTERAR PERFIL
    public function update(PerfilDTO $perfilDTO)
    {
        try{
        $query = "UPDATE escolabd.perfis SET nome = :nome 
            WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);

        $perfilId = $perfilDTO->getId();
        $perfilUsu = $perfilDTO->getNome();

        $stmt->bindParam(':id', $perfilId);
        $stmt->bindParam(':nome', $perfilUsu);

        $result = $stmt->execute();
        
        return $result;
        }catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        $this->dbh = null;
}

//PesquisarPerfilPorId
    public function getById($id)
    {
        try{
        $query = "SELECT * FROM escolabd.perfis WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;
        }catch (PDOException $exc) {
         echo $exc->getMessage();
        }
        $this->dbh = null;
}
}