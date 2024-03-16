<?php

class Pessoa
{
    public $cpf;
    public $nome;
    public $email;


    public function exibirDados() {
        return "
        <p>
            CPF: {$this->cpf} - 
            Nome: {$this->nome} - 
            E-mail: {$this->email} 
        </p>
        ";
    }
}
