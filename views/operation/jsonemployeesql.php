<?php require_once "./views/_header.php" ?>

<?php

?>

<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">SQL Json 2</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <p>Obtener utilizando una consulta SQL La cantidad de personas y la sumatoria
                    de salarios, agrupando por departamento y nivel de estudios, debe mostrar
                    el nombre del departamento, nombre de nivel educativo cantidad de personas y sumatoria de salarios, debe traer los resultados en formato
                    JSON.
                <ul>
                    <li>
                        Se debe mostrar en pantalla el sql de la consulta realizada.
                    </li>
                    <li>
                        Se debe mostrar en pantalla el resultado de la consulta.
                    </li>
                    <li>
                        Se debe mostrar en pantalla el resultado de la consulta en formato Json.
                    </li>
                </ul>
                </p>
            </div>
        </div>

        <div class="col-md-8">
            <div class="marco-view p-4">
                <span>
                </span>
            </div>

            <div class="pl-5 mt-5 marco-view p-4">
                <div>
                    <?php
                    // echo "<pre>";

                    // echo "<table class='table table-hover'>";
                    // echo "<thead>";
                    // echo "<tr>";
                    // echo "<th>id</th>";
                    // echo "<th>nombre empleado</th>";
                    // echo "<th>nivel de educación</th>";
                    // echo "</tr>";
                    // echo "</thead>";

                    // echo "<tbody>";

                    // foreach ($params["sql"] as $key => $value) {
                    //     echo "<tr>";
                    //     echo "<td>" . $value["id"] . "</td>";
                    //     echo "<td>" . $value["lastname"] . "</td>";
                    //     echo "<td>" . $value["descriptions"] . "</td>";
                    //     echo "</tr>";
                    // }
                    // echo "</tbody>";
                    // echo "</table>";

                    // echo "</pre>";
                    ?>
                </div>
            </div>

            <div class="pl-5 mt-5 marco-view p-4">
                <div>
                    <?php
                    // echo "<pre>";
                    // echo json_encode([
                    //     "employees" => $params["sql"]
                    // ]);
                    // echo "</pre>";
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>