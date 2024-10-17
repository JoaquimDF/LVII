<?php

// Conexão com o BD

class diarioDTO {
    //put your code here
    private $id_diario;
    private $frequencia;
    private $datacadastro;
    private $ativo;
    private $idusuario;
    private $id_disciplina;
    
    function getId_diario() {
        return $this->id_diario;
    }

    function getFrequencia() {
        return $this->frequencia;
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

    function setId_diario($id_diario) {
        $this->id_diario = $id_diario;
    }

    function setFrequencia($frequencia) {
        $this->frequencia = $frequencia;
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
