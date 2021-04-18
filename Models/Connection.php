<?php

require dirname(__DIR__) . '\\Helpers\\utils.php';

class Connection
{
    public static function getConnection()
    {
        $pathJsonConfig = dirname(__DIR__) . '\\config.json';
        $jsonConfig = readJson($pathJsonConfig);
        $connection = mysqli_connect(
            $jsonConfig['DATABASE']['IP'],
            $jsonConfig['DATABASE']['USER'],
            $jsonConfig['DATABASE']['PASSWORD'],
            $jsonConfig['DATABASE']['BD'],
        );
        if (!$connection) {
            throw new Exception("ERRO AO CONECTAR BANCO DE DADOS");
        }
        return $connection;
    }
}
