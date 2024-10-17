<?php


 
class FrequenciaDTO {
    //Declaração das variávies
    private $idFrequencia;
    private $frequencia;
    private $id_disciplina;
    private $idUsuario;
    
    //Fim das criação da variáveis
   
    
    
    //Criação das funções
    
    function getIdFrequencia() {
        return $this->idFrequencia;
    }

    function getFrequencia() {
        return $this->frequencia;
    }

    function getId_disciplina() {
        return $this->id_disciplina;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdFrequencia($idFrequencia) {
        $this->idFrequencia = $idFrequencia;
    }

    function setFrequencia($frequencia) {
        $this->frequencia = $frequencia;
    }

    function setId_disciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


   
}
    //FIM 