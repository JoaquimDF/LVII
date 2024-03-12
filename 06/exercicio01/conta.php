<?php

    class Conta
    {
        private $numero;
        private $cliente;
        private $saldo = 0;

        public function getNumero()
        {
            return $this->numero;
        }
        
        public function getCliente()
        {
            return $this->cliente;
        }
        
        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        public function setSaldo($valor)
        {
            $this->saldo = $valor;
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

        # declarando método toString()

        public function toString()
        {
            return "Cliente: {$this->cliente},
                    Numero da Conta: {$this->numero}, 
                    Saldo: {$this->saldo}.";
        }
    }
