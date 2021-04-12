<?php require_once "./views/_header.php" ?>

<?php

?>

<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">SQL Json</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <p>Utilizando una consulta SQL obtener el listado de personas y su nivel de
                    educación, para las personas que trabajan en departamentos en donde la
                    suma de los sueldos de los empleados que los integran es superior a
                    250.000.
                    IMPORTANTE:
                <ul>
                    <li>
                        Se debe montar en pantalla el apellido de la persona (lastname) y el nivel de
                        educacional (description de la tabla educationlevel). Mostrar los resultados
                        ordenados por apellido.
                    </li>
                    <li>
                        Se debe mostrar en pantalla el SQL de la consulta.
                    </li>
                    <li>
                        Se debe mostrar en pantalla el resultado de la consulta en formato Json.
                    </li>
                </ul>
                </p>
            </div>
        </div>

        <div class="col-md-8">
            <div class="marco-view">
                <span>
                    SELECT ae.id, ae.lastname, edu.descriptions FROM `appx_employee` ae
                    INNER JOIN appx_educationlevel edu ON edu.id = ae.educationlevel_id
                    ORDER BY ae.lastname
                </span>
            </div>

            <div class="pl-5 mt-5 marco-view">

                <div>
                    <?php
                    echo "<pre>";
                    echo json_encode([
                        "employees" => $params["sql"]
                    ]);
                    echo "</pre>";
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>