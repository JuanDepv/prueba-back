<?php

require_once __DIR__ . "/autoload.php";
require_once "./core/FacadeController.php";
require_once "./config/constants.php";

$app = new FacadeController();
$app->App();


