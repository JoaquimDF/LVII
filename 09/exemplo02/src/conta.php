<?php

abstract class Conta
{
    protected $numero;
    protected $cliente;
    protected $saldo;

    public function __construct($numero, $cliente, $saldo=0)
    {
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo +=$valor;
    }

    public function __toString()
    {
        $saldo = number_format($this->saldo, 2, ',', '.');
        return "<p><strong>Cliente:</strong> {$this->cliente}</p>
                <p><strong>Numero da Conta:</strong> {$this->numero}</p> 
                <p><strong>Saldo: R$</strong> {$saldo}</p>";
    }
}
