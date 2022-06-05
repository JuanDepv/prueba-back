<?php require_once "./views/_header.php" ?>


<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">SQL Departamentos</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <p>Obtener utilizando una consulta SQL el listado de departamentos que tienen
                    2 o más empleados. Indicar el nombre del departamento (campo
                    department_name) y la cantidad de empleados, ordenado por el nombre del
                    departamento de forma ascendente.</p>
            </div>
        </div>

        <div class="col-md-8">
            <div class="marco-view p-4">
                <span>SELECT ap.id, ap.departament_name, COUNT(ae.id) as 'cantidad_empleados' FROM appx_departament ap
                    INNER JOIN appx_employee ae ON ae.departament_id = ap.id
                    GROUP BY ap.departament_name ASC
                    HAVING cantidad_empleados > 2
                </span>
            </div>

            <div class="pl-5 mt-5 marco-view p-5">
                <div>
                    <?php
                    echo "<pre>";

                    echo "<table class='table table-hover'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>departamento</th>";
                    echo "<th>nombre departamento</th>";
                    echo "<th>numero de empleados</th>";
                    echo "</tr>";
                    echo "</thead>";

                    echo "<tbody>";

                    foreach ($params["sql"] as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . $value["id"] . "</td>";
                        echo "<td>" . $value["departament_name"] . "</td>";
                        echo "<td>" . $value["cantidad_empleados"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";

                    echo "</pre>";
                    ?>
                </div>
            </div>


            <div class="pl-5 mt-5 marco-view">
                <div>
                    <?php
                    echo "<pre>";
                    echo json_encode([
                        "departaments" => $sql
                    ]);
                    echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>