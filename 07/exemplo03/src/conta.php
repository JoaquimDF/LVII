<?php
    class Conta
    {
        private $numero;
        private $cliente;
        private $saldo;

        # declarando método construtor
        public function __construct($numero, $cliente, $saldo=0)
        {
            $this->numero = $numero;
            $this->cliente = $cliente;
            $this->saldo = $saldo;
        }

        # declarando métodos mágico __get
        public function __get($name)
        {
            return $this->$name;
        }

        # declarando métodos mágico __set
        public function __set($name, $value)
        {
            $this->$name = $value;
        }

        # declarando método mátigo __toString()
        public function __toString()
        {
            $saldo = number_format($this->saldo, 2, ',', '.');
            return "Cliente: {$this->cliente},
                    Numero da Conta: {$this->numero}, 
                    Saldo: R$ {$saldo}.";
        }

        # declarando métodos da classe
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
    }
