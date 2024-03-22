<?php

class ContaEspecial extends Conta
{
    private $limite = 100;

    public function __construct($numero, $cliente, $saldo, $limite)
    {
        parent::__construct($numero, $cliente, $saldo);
        $this->limite = $limite;
    } 
    
    public function getSaldoEspecial()
    {
        return $this->limite + $this->saldo;
    }
}
