<?php

class Justificativas
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT id_justificativa, descricao FROM justificativas";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return null;
        }
        $arrayRegistros = [];
        while ($registros = mysqli_fetch_assoc($result)) {
            array_push($arrayRegistros, $registros);
        }

        mysqli_close($this->conn);
        return $arrayRegistros;
    }
}
