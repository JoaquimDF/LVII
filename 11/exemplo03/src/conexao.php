<?php

    class Conexao{
        
        public static function getConexao()
        {
            try {
                return new PDO("mysql:host=localhost;dbname=aula11", "root", "");
            } catch(\PDOException $e) {
                echo 'Error ao conectar com banco de dados. ' . $e->getMessage();
                return null;
            }
        }
    }
