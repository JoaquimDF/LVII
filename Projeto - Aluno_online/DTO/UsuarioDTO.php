<?php

class usuarioDTO {

    private $idUsuario;
    private $nome;
    private $matricula;
    private $datanascimento;
    private $endereco;
    private $email;
    private $cpf;
    private $nomeResponsavel;
    private $login;
    private $senha;
    private $ativo;
    private $idPerfil;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNomeResponsavel() {
        return $this->nomeResponsavel;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getIdPerfil() {
        return $this->idPerfil;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNomeResponsavel($nomeResponsavel) {
        $this->nomeResponsavel = $nomeResponsavel;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }



    

}
