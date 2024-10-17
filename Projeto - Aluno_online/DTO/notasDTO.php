<?php
class notasDTO {
    private $idnotas;
    private $notas;
    private $datacadastro;
    private $ativo;
    private $idusuario;
    private $id_disciplina;
    
    function getIdnotas() {
        return $this->idnotas;
    }

    function getNotas() {
        return $this->notas;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function getId_disciplina() {
        return $this->id_disciplina;
    }

    function setIdnotas($idnotas) {
        $this->idnotas = $idnotas;
    }

    function setNotas($notas) {
        $this->notas = $notas;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setId_disciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }


}
