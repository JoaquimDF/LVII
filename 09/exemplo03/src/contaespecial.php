<?php

final class ContaEspecial extends Conta
{
    private $limite = 100;

    public function __construct($numero, $cliente, $saldo, $limite)
    {
        parent::__construct($numero, $cliente, $saldo);
        $this->limite = $limite;
    } 

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    public function getSaldo()
    {
        return $this->limite + $this->saldo;
    }

    public function sacar($valor)
    {
        if ($valor <= ($this->getSaldo()))
        {
            $this->saldo -= $valor;
        } else {
            echo "<p><strong>Operação não permitida - </strong> 
                Valor a ser sacado R$ {$valor} é maior que o saldo. </p>";
        }
    }

    public function __toString()
    {
        $saldo = number_format($this->getSaldo(), 2, ',', '.');
        return "<p><strong>Cliente:</strong> {$this->cliente}</p>
                <p><strong>Numero da Conta:</strong> {$this->numero}</p> 
                <p><strong>Saldo: R$</strong> {$saldo}</p>";
    }
}
