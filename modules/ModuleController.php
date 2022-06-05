<?php

require_once "./core/View.php";
require_once "./models/EmployeesModel.php";

class Module
{
    protected $views;

    public function __construct()
    {
        $this->views = new View();
    }

    public function menu()
    {
        $this->views->render("menu", [
            "Nombres" => "Juan Jose",
            "Apellidos" => "Restrepo Cuadros",
            "Correo" => "cuadrosc99@gmail.com"
        ]);
    }

    public function lax()
    {
        $this->views->render("operation/lax");
    }

    public function histograma()
    {
        $this->views->render("operation/histograma");
    }

    public function matriz()
    {
        $this->views->render("operation/matriz");
    }

    public function sqlDepartaments()
    {
        $empleyees = new EmployeesModel();
        $sql_departament = $empleyees->getDepartaments();
        $this->views->render("operation/departaments", [
            "sql" => $sql_departament,
        ]);
    }

    public function sqlJsonEmpleyees()
    {
        $empleyees = new EmployeesModel();
        $sql_employee = $empleyees->getEmployees();
        $this->views->render("operation/jsonemployee",  [
            "sql" => $sql_employee
        ]);
    }

    public function trigger()
    {
        $empleyees = new EmployeesModel();
        $flag = true;
        $data = [];

        if(isset($_POST)) {
            // var_dump($_POST);

            $firstname = $_POST["firstname"] ?? "";
            $lastname = $_POST["lastname"] ?? "";
            $departament_i = $_POST["departament_id"] ?? "";
            $salary = $_POST["salary"] ?? "";
            $education_i = $_POST["education_id"] ?? "";

            if(empty($firstname) || empty($lastname) || empty($departament_i) || empty($salary) || empty($education_i)) {
                $flag = false;
            } else {
                $data = [
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "departament_id" => $departament_i,
                    "salary" => $salary,
                    "educationlevel_id" => $education_i
                ];
                $empleyees->insertEmployee($data);
            }

            
        }

        $departament = $empleyees->getDepartamentCurrent();
        $education_level = $empleyees->getEducationLevel();
        $employes = $empleyees->employees();

        $this->views->render("operation/employee_trigger",  [
            "educations" => $education_level,
            "departaments" => $departament,
            "validation" => $flag,
            "employees" => $employes
        ]);
    }

    public function sqlEmployees2() {
        $this->views->render("operation/jsonemployeesql",  []);
    }
}
