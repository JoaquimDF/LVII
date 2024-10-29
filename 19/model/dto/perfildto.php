<?php
//data transfer object - transferencia dos dados do formulario (view)
class PerfilDTO{
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
}
?>