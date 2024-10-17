<?php
class disciplina_has_usuarioDTO {
    private $id_dhu;
    private $id_disciplina;
    private $idusuario;
    private $datacadastro;
    private $ativo;

    function getId_dhu() {
return $this->id_dhu;
}

 function getId_disciplina() {
return $this->id_disciplina;
}

 function getIdusuario() {
return $this->idusuario;
}

 function getDatacadastro() {
return $this->datacadastro;
}

 function getAtivo() {
return $this->ativo;
}

 function setId_dhu($id_dhu) {
$this->id_dhu = $id_dhu;
}

 function setId_disciplina($id_disciplina) {
$this->id_disciplina = $id_disciplina;
}

 function setIdusuario($idusuario) {
$this->idusuario = $idusuario;
}

 function setDatacadastro($datacadastro) {
$this->datacadastro = $datacadastro;
}

 function setAtivo($ativo) {
$this->ativo = $ativo;
}


}
