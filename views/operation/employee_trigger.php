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

                <form action="<?php echo BASE_URL ?>Module/lax" method="post">
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
                        <select name="departament_id" id="" class="form-control">
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
            <div class="marco-view">
                <div class='alert alert-danger' role='alert'>
                    Prueba No superada.... - con la creacion del trigger
                </div>
            </div>

            <div class="pl-5 mt-5 marco-view">
                <div>
                    <?php

                    ?>
                </div>
            </div>


            <div class="pl-5 mt-5 marco-view">
                <div>
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>