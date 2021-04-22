<?php
require dirname(__DIR__) . '\\Models\\Connection.php';

class AjustesPonto
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    public function get($id)
    {
        $sql = "SELECT 
                    ap.id, 
                    (select min(aj.data) from ajustes as aj where aj.id_ajuste_ponto = ap.id limit 1) as data_inicial,
                    (select max(aj.data) from ajustes as aj where aj.id_ajuste_ponto = ap.id limit 1) as data_final
                from ajustes_ponto as ap
                    where ap.id_usuario = $id
                    GROUP BY 
                    ap.id, 
                    (select min(aj.data) from ajustes as aj where aj.id_ajuste_ponto = ap.id limit 1),
                    (select max(aj.data) from ajustes as aj where aj.id_ajuste_ponto = ap.id limit 1)";
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

    public function insertAjuste(array $values)
    {
        error_reporting(E_ALL);
        $values = array_chunk($values, 4);
        $sql = "INSERT INTO ajustes_ponto (id_usuario) VALUES (" . $_SESSION['id'] . ")";
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return  "erro ao inserir ajuste";
        }
        $id_ajuste_ponto = mysqli_insert_id($this->conn);
        $sql = "INSERT INTO ajustes (id_ajuste_ponto, id_justificativa, data, hora_entrada, hora_saida) VALUES";
        foreach ($values as $key => $value) {
            $sql .= " ({$id_ajuste_ponto} , '{$value[3]}', convert('{$value[0]}', date), convert('{$value[1]}', time),  convert('{$value[2]}', time)";
            $sql .= '),';
        }
        $sql = substr($sql, 0, -1);
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            return "erro ao inserir ajuste";
        }
        mysqli_close($this->conn);

        return "registros inseridos com sucesso";
    }


    public function getAjustes($id)
    {
        $sql = "SELECT 
                    a.data, 
                    a.hora_entrada, 
                    a.hora_saida, 
                    j.descricao 
                from ajustes_ponto as ap 
                inner join ajustes as a ON a.id_ajuste_ponto = ap.id 
                inner join justificativas as j ON j.id_justificativa = a.id_justificativa 
                where a.id_ajuste_ponto = {$id} and ap.id_usuario = {$_SESSION['id']}";

        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            echo mysqli_error($this->conn);
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
