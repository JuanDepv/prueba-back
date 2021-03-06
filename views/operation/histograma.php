<?php require_once "./views/_header.php" ?>

<?php 

session_start();
$valido = 0;
$valores = array();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

$valor = $_POST['valor'] ?? "";

if($valor <= 5) {

    if (!empty($_POST['valores'])) {
        $valores = explode(",", $_POST['valores']);
    } else {
        $valores = array();
    }

    array_push($valores, $valor);
}

$_SESSION['data'] = $valores;

?>


<div class="container mt-4">

    <a class="btn btn-view" href="<?php echo BASE_URL ?>Module/menu">Volver</a>

    <h2 class="mt-3">Proceso de Histograma</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <p>Escribir un programa en PHP que le solicite al usuario un arreglo de 10
                    posiciones con números enteros del 1 al 5. Recorra el arreglo y genere un
                    histograma en base a los números de este. El arreglo se llama myArray y
                    contiene 10 elementos que corresponden a números enteros del 1 al 5. Un
                    histograma representa que tanto un elemento aparece en un conjunto de
                    datos (Debe mostrar la frecuencia para todos los números del 1 al 5, incluso
                    si no están presentes en el arreglo).</p>

                <form action="<?php echo BASE_URL ?>Module/histograma" method="POST">
                    <div class="form-group">
                        <label for="tamano">valores</label>
                        <input type="number" name="valor" id="valor" class="form-control">
                    </div>
                    <input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data']); ?>">
                    <button class="btn btn-view">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">

            <div class='alert alert-danger' role='alert'>
                Prueba No superada.... - array de elementos estaticos
            </div>

            <div class="pl-5 mt-5 marco-view">

                <!-- <span>"$array = array(1, 3, 2, 4, 5, 1, 1, 1, 4, 5)"</span> -->
                <br/>
                <?php
                // arreglo de 10 posiciones (numeros del 1 al 5)
                // $array = array(1, 3, 2, 4, 5, 1, 1, 1, 4, 5);
                // $duplicados = array_count_values($array);


                for ($i=0; $i < count($valores); $i++) { 
                    echo " ". $valores[$i];
                }
                ?>
            </div>

            <div class="marco-view">
                <!-- <span><?php // print_r($duplicados) ?></span> -->
            </div>
        </div>
    </div>
</div>

<?php require_once "./views/_footer.php" ?>