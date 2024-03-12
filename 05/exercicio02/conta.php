<?php

    class Conta
    {
        # declarando atributos
        public $saldo;
        
        # declando métodos
        public function getSaldo()
        {
            return $this->saldo;
        }

        public function exibirSaldo()
        {
            $dataAtual = date('d/m/Y H:m');
            echo "Seu saldo hoje, {$dataAtual}: {$this->getSaldo()}<br>";
        }
    }
