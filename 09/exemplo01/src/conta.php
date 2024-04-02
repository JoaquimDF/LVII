<?php

class Conta
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

    public function sacar($valor)
    {
        if ($valor <= $this->saldo)
        {
            $this->saldo -= $valor;
        } else {
            throw new Error("Operação não permitida. 
                Valor a ser sacado é maior que o saldo.");
        }
    }

    public function __toString()
    {
        $saldo = number_format($this->saldo, 2, ',', '.');
        return "<p><strong>Cliente:</strong> {$this->cliente}</p>
                <p><strong>Numero da Conta:</strong> {$this->numero}</p> 
                <p><strong>Saldo: R$</strong> {$saldo}</p>";
    }
}
