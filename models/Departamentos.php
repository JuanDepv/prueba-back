<?php

require_once "./config/DataBase.php";

class Departamentos extends DataBase
{
    public function ___construct()
    {
    }

    public function getDepartaments()
    {
        $db = new DataBase();
        $sql = "";
        try {
            $sql .= "SELECT ap.id, ap.departament_name, COUNT(ae.id) as 'cantidad_empleados' FROM appx_departament ap ";
            $sql .= "INNER JOIN appx_employee ae ON ae.departament_id = ap.id ";
            $sql .= "GROUP BY ap.departament_name ASC ";
            $sql .= "HAVING cantidad_empleados > 2";

            $stmt = $db->getConnection()->prepare($sql);

            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return array();
                }
            }
        } catch (PDOException $e) {
            echo "error-> " . $e->getMessage();
        }
    }

    public function getEmployees()
    {
        $db = new DataBase();
        $sql = "";
        try {
            $sql .= "SELECT ae.id, ae.lastname, edu.descriptions FROM appx_employee ae ";
            $sql .= "INNER JOIN appx_educationlevel edu ON edu.id = ae.educationlevel_id ";
            $sql .= "ORDER BY ae.lastname ";
            // $sql .= "";

            $stmt = $db->getConnection()->prepare($sql);

            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return array();
                }
            }
        } catch (PDOException $e) {
            echo "error-> " . $e->getMessage();
        }
    }
}
