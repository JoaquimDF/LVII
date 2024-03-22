<?php
class Conta 
    {
        public $numero;
        public $cliente;
        public $saldo = 0.00;

        public function __construct($numero, $cliente, $saldo) {
            $this->numero = $numero;
            $this->cliente = $cliente;
            $this->saldo = $saldo;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }
        public function __toString() {
            return "
                <h1>Informações do cliente</h1>
                <p>Numero da conta: {$this->numero}</p>
                <p>Cliente: {$this->cliente}</p>
                <p>Saldo: R$ {$this->saldo}</p>
            ";
        }

        public function depositar($valor) {
            $this->saldo += $valor;
        }

        public function sacar($valor) {
            $this->saldo -= $valor;
        }        
    }
