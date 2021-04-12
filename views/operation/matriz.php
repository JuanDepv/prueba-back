<?php require_once "./views/_header.php" ?>

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

            <form action="" method="">
                <div class="form-group">
                    <label for="tamano">valores</label>
                    <input type="text" name="tamano" id="tamano" class="form-control">
                </div>
                <button class="btn btn-view">Enviar</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class='alert alert-danger' role='alert'>
                Prueba No superada....
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>