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

        # declarando método toString()
        public function toString()
        {
            $saldo = number_format($this->saldo, 2, ',', '.');
            return "Cliente: {$this->cliente},
                    Numero da Conta: {$this->numero}, 
                    Saldo: {$saldo}.";
        }
    }
