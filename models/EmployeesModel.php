<?php

require_once "./config/DataBase.php";

class EmployeesModel
{
    public function ___construct()
    {
    }

    public function getEducationLevel()
    {
        $db = new DataBase();
        $sql = "";
        try {
            $sql .= "SELECT ae.id, ae.descriptions FROM appx_educationlevel ae ";

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

    public function getDepartamentCurrent()
    {
        $db = new DataBase();
        $sql = "";
        try {
            $sql .= "SELECT ap.id, ap.departament_name FROM appx_departament ap ";

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
            $sql .= "SELECT ae.id, ae.lastname, ad.descriptions, SUM(ae.salary) as salario FROM appx_employee ae ";
            $sql .= "INNER JOIN appx_educationlevel as ad ON (ae.educationlevel_id = ad.id) ";
            $sql .= "INNER JOIN (SELECT id, departament_id, SUM(salary) as salario FROM appx_employee GROUP BY departament_id) AS sub ON (sub.departament_id = ae.departament_id) ";
            $sql .= "WHERE sub.salario > 250 ";
            $sql .= "GROUP BY ae.departament_id, ae.id ORDER BY ae.lastname";

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

    public function insertEmployee($data)
    {
        $response = array();
        $db = new DataBase();
        $sql = "";
        try {
            $sql .= "INSERT INTO appx_employee (firstname, lastname, departament_id, salary, educationlevel_id)";
            $sql .= "VALUES(:firstname, :lastname, :departament_id, :salary, :educationlevel_id) ";

            $stmt = $db->getConnection()->prepare($sql);
            $stmt->bindParam(":firstname", $data["firstmane"], PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $data["lastname"], PDO::PARAM_STR);
            $stmt->bindParam(":departament_id", $data["departament_id"], PDO::PARAM_INT);
            $stmt->bindParam(":salary", $data["salary"], PDO::PARAM_INT);
            $stmt->bindParam(":educationlevel_id", $data["educationlevel_id"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                $response["success"] = true;
            } else {
            }
        } catch (PDOException $e) {
            echo "error-> " . $e->getMessage();
        }
    }
}
