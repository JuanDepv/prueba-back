<?php require_once "./views/_header.php" ?>

<?php
session_start();

$errors = array();
$valores = array();

$valido = 0;
$contador = 1;
$valor = $_POST['valor'] ?? "";

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

if ($valor != "") {
    if ($valor <= 5) {

        echo "valida el dato menor o igual a cinco <br>";

        if (!empty($_POST['valores'])) {

            echo "valida el valores <br>";
            $valores = explode(",", $_POST['valores']);
        } else {

            echo "vacia el valores <br>";
            $valores = array();
        }

        array_push($valores, $valor);

    } else {
        $errors["dos"] = "dato mayor a cinco, vuelva a llenar el arreglo";
    }
} else {
    $errors["uno"] = "datos vacios..., ingrese un valor y vuelva y llene el arreglo";
}




$_SESSION['data'] = $valores;
?>

<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">Proceso de Matriz</h2>

    <div class="row">
        <div class="col-md-4">
            <p>Se le debe de solicitar al usuario digitar números del 1 al 9, en una matriz
                de 3 x3 . Así, por ejemplo, esta matriz:
                1 2 9
                2 5 3
                5 1 5
                Se representaría como (1,2,9,2,5,3,5,1,5). El objetivo es identificar el camino
                que de la menor suma al recorrer el arreglo bi-dimensional de izquierda a
                derecha. Se empieza en la columna izquierda y se mueve siempre una
                columna a la derecha de la misma fila o a una fila hacia arriba o hacia abajo.
                En el ejemplo, si parte de 1, puede pasar al 2 o al 5. De ahí, si pasó al 5
                puede pasar al 9 al 3 o al 5. Por otro lado, si pasa del 1 al 2, desde el 2 de la
                columna del medio no podría pasar al 5 de la última fila en la columna
                derecha.
                Es necesario encontrar el camino que produce el número más bajo al sumar
                los valores de cada número que visita. Así que, para el ejemplo, la ruta con
                la menor suma sería 1,2,3</p>

            <form action="<?php echo BASE_URL ?>Module/matriz" method="POST">
                <div class="form-group">
                    <label for="tamano">valores</label>
                    <input type="text" name="valor" id="valor" class="form-control">
                </div>
                <input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data']); ?>">
                <button class="btn btn-view mb-5">Enviar</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class='alert alert-danger' role='alert'>
                Prueba No superada....
            </div>

            <div class="pl-5 mt-5 marco-view p-5">

                <span>"$array = array(1, 3, 2, 4, 5, 1, 1, 1, 4, 5)"</span>
                <br />
                <?php

                if (count($valores) > 0) {
                    for ($i = 0; $i < count($valores); $i++) {
                        echo " " . $valores[$i];
                    }
                }


                if(count($errors) > 0) {
                    foreach ($errors as $key => $value) {
                        echo $key." - ". $value;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>