<?php

// Conexão com o BD

class cursoDTO {
    //put your code here
    private $idcurso;
    private $curso;
    private $ativo;
    
    function getIdcurso() {
        return $this->idcurso;
    }

    function getCurso() {
        return $this->curso;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
}
