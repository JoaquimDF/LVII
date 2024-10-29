<?php
//data transfer object - transferencia dos dados do formulario (view)
class UsuarioDTO{
    private $id;
    private $nome;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
	
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }
    
	public function setPerfilId($perfil_id){
        $this->perfil_id = $perfil_id;
    }

    public function getPerfilId(){
        return $this->perfil_id;
    }	
		
    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }
}
?>