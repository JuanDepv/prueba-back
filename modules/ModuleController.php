<?php

require_once "./core/View.php";
require_once "./models/Departamentos.php";

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
        $departament = new Departamentos();
        $sql_departament = $departament->getDepartaments();
        $this->views->render("operation/departaments", [
            "sql" => $sql_departament,
        ]);
    }

    public function sqlJsonEmpleyees()
    {
        $departament = new Departamentos();
        $sql_employee = $departament->getEmployees();
        $this->views->render("operation/jsonemployee",  [
            "sql" => $sql_employee
        ]);
    }
}
