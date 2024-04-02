<?php

    class Conexao
    {
        static public $servidor = '127.0.0.1';
        static private $conexao = 'string de conexao com banco de dados';

        public static function minhaConexao()
        {
            return self::$conexao;
        }

        public static function minhaString()
        {
            return 'Retornando uma string qualquer';
        }
    }
