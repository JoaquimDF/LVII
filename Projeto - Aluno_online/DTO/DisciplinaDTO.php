<?php
class disciplinaDTO {
    private $id_disciplina;
    private $disciplina;
    private $ativo;
    private $idcurso;
    function getId_disciplina() {
        return $this->id_disciplina;
    }

    function getDisciplina() {
        return $this->disciplina;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getIdcurso() {
        return $this->idcurso;
    }

    function setId_disciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }

    function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }


}
