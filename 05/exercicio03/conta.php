<?php

    class Conta
    {
        public $numero;
        public $cliente;
        public $saldo = 0;
        
        public function getSaldo()
        {
            return $this->saldo;
        }

        public function sacar($valor)
        {
            $this->saldo -= $valor;
        }

        public function abrirConta($numero, $cliente, $saldo)
        {
            $this->numero = $numero;
            $this->cliente = $cliente;
            $this->saldo = $saldo;
        }

        public function depositar($valor)
        {
            $this->saldo += $valor;
        }

        public function imprimirSaldo()
        {
            echo "<p>Seu saldo atual é: {$this->getSaldo()}</p>";
        }
    }
