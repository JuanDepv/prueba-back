<?php require_once "./views/_header.php" ?>

<?php

// variable de entrada;
$tamanio = null;

?>


<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">Proceso de la x</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <p>Escribir un programa en PHP que imprima una X construida a base de la
                    letra X y utilizar el carácter de subrayado como espacio. El tamaño de la x
                    se basa en una variable n que indicará el tamaño de la letra para imprimir y
                    deberá ser digitado por el usuario (en una matriz de n x n)</p>

                <form action="<?php echo BASE_URL ?>Module/lax" method="POST">
                    <div class="form-group">
                        <label for="tamano">Tamaño</label>
                        <input type="number" name="tamanio" id="tamanio" class="form-control">
                    </div>
                    <button class="btn btn-view">Enviar</button>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="pl-5 mt-5 marco-view p-2">

                <div>
                    <?php
                        if (isset($_POST["tamanio"])) {
                            $tamanio = $_POST["tamanio"];
                            if (!empty($tamanio)) {
                                for ($fila = 0; $fila < $tamanio; $fila++) {
                                    for ($columna = 0; $columna < $tamanio; $columna++) {

                                        if ($fila == $columna || ($tamanio - $columna - 1) == $fila) {
                                            echo "X";
                                        } else {
                                            echo "_";
                                        }
                                    }
                                    echo "\n";
                                    echo "<br>";
                                }
                            } else {
                                echo "el dato se envio vacio!";
                            }
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>