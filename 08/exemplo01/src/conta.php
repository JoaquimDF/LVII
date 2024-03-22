<?php

class Conta
{
    private $numero;
    private $cliente;
    private $saldo;

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
            echo "<p><strong>Operação não permitida - </strong> 
                Valor a ser sacado R$ {$valor} é maior que o saldo. </p>";
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
