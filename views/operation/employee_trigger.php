<?php require_once "./views/_header.php" ?>


<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">SQL Triggers</h2>

    <div class="row">
        <div class="col-md-5">
            <div class="mt-5">
                <p>Crear un disparador (trigger) en la tabla APPX_employee que asigne un
                    salario de 908.526 al crear un nuevo empleado, cuando el name contenga la
                    palabra “ale”.
                </p>

                <form action="<?php echo BASE_URL ?>Module/trigger" method="post">
                    <div class="form-group">
                        <label for="">firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">departaments</label>
                        <select name="departament_id" id="departament_id" class="form-control">
                            <option value=""> Seleccione... </option>
                            <?php foreach ($params["departaments"] as $key => $value) : ?>
                                <option value="<?= $value["id"] ?>"> <?= $value["departament_name"] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">salary</label>
                        <input type="number" name="salary" id="salary" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">educationlevel</label>
                        <select name="education_id" id="" class="form-control">
                            <option value=""> Seleccione... </option>
                            <?php foreach ($params["educations"] as $key => $value) : ?>
                                <option value="<?= $value["id"] ?>"> <?= $value["descriptions"] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-view">Enviar</button>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="pl-5 mb-3 marco-view">
                <div>
                    <?php if (!$validation) : ?>
                        <div class='alert alert-danger' role='alert'>
                            campos vacios...
                        </div>
                    <?php else : ?>
                        <div class='alert alert-success' role='alert'>
                            datos insertados...
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="marco-view">
                <pre>
                    DELIMITER //
                    CREATE TRIGGER `appx_employee_nw` 
                    BEFORE INSERT ON `appx_employee` 
                    FOR EACH ROW 
                    BEGIN
                    IF NEW.firstname LIKE '%ale%' THEN
                        SET NEW.salary = 908.456;
                    END IF;

                    END//
                    DELIMITER ;
                </pre>
            </div>

            <div class=" marco-view">
                <div>
                    <?php
                    echo "<pre>";

                    echo "<table class='table table-hover'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>firstname</th>";
                    echo "<th>lastname</th>";
                    echo "<th>departament</th>";
                    echo "<th>salary</th>";
                    echo "<th>education</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach ($employees as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . $value["firstname"] . "</td>";
                        echo "<td>" . $value["lastname"] . "</td>";
                        echo "<td>" . $value["departament_name"] . "</td>";
                        echo "<td>" . $value["salary"] . "</td>";
                        echo "<td>" . $value["descriptions"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";

                    echo "</pre>";
                    ?>
                </div>
            </div>

            <div class=" marco-view">
                <?php
                    echo "<pre>";
                    echo json_encode([
                        "employees" => $employees
                    ]);
                    echo "</pre>";
                ?>
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>