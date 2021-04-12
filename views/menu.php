<?php require_once "_header.php" ?>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="marco ">
                    <span>web ...</span>


                    <div class="marco-interior container">
                        <h1 class="text-center pt-4">Prueba BackEnd MovilBox</h1>

                        <div class="d-flex text-center justify-content-between mt-4">
                            <label for="">
                                Nombre:
                                <?php echo $params["Nombres"] ?>
                            </label>

                            <label for="">
                                Apellido:
                                <?php echo $params["Apellidos"] ?>
                            </label>

                            <label for="">
                                Correo:
                                <?php echo $params["Correo"] ?>
                            </label>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-center">Menú</h3>

                            <div class="menu d-flex d-flex justify-content-center">
                                <ul>
                                    <li>1- <a href="<?php echo BASE_URL ?>Module/lax">La x</a></li>
                                    <li>2- <a href="<?php echo BASE_URL ?>Module/histograma">Histograma</a></li>
                                    <li>3- <a href="<?php echo BASE_URL ?>Module/matriz">Matriz</a></li>

                                </ul>
                                <ul>
                                    <li>4- <a href="<?php echo BASE_URL ?>Module/sqlDepartaments">Sql Departamentos</a></li>
                                    <li>5- <a href="<?php echo BASE_URL ?>Module/sqlJsonEmpleyees">Sql -> Json</a></li>
                                    <li>6- <a href="<?php echo BASE_URL ?>Module/histograma">Sql -> trigger</a></li>
                                    <li>7- <a href="<?php echo BASE_URL ?>Module/histograma">Sql -> Json</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once "_footer.php" ?>