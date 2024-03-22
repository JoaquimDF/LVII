<?php

class ContaEspecial extends Conta
{
    private $limite =100;

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }    
}
