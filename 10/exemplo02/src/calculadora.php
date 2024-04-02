<?php

    class Calculadora
    {
        private int $valor1 = 0;
        private int $valor2 = 0;
        private string $operacao;

        public function __construct(int $valor1, int $valor2, $operacao)
        {
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
            $this->operacao = $operacao;
        }

        public function executarOperacao(): float
        {
        
            $resultado = 0;
            switch ($this->operacao) 
            {
                case 'subtrair':
                    $resultado = $this->subtrair();
                    break;
                default:
                    $resultado = $this->somar();
                    break;
            }
            return $resultado;
        }

        private function somar(): int
        {
            return $this->valor1 + $this->valor2;
        }

        private function subtrair(): int
        {
            return $this->valor1 - $this->valor2;
        }
    }
