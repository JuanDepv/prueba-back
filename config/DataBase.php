<?php

class DataBase
{
    private $host = "localhost:33065";
    private $db_name = "employee";
    private $db_user = "root";
    private $db_pass = "";
    private $conn;

    public function getConnection()
    {
        try {
            $this->conn = new PDO("mysql:dbname=" . $this->db_name . ";host=" . $this->host, $this->db_user, $this->db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // var_dump($this->conn);
        } catch (PDOException $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }

        return $this->conn;
    }
}

$db = new DataBase();
var_dump($db->getConnection());
