<?php
require dirname(__DIR__) . '\\Models\\Connection.php';

class Usuario
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    public function get(array $values)
    {
        $sql = "SELECT * FROM usuarios as usu where ";
        foreach ($values as $key => $value) {
            $sql .= "$key ='$value'";
        }
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return null;
        }
        $usuario = mysqli_fetch_assoc($result);
        mysqli_close($this->conn);
        return $usuario;
    }
}
