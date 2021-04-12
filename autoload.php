<?php

function controllers_autoload($classname)
{
    if (file_exists('modules/' . $classname . '.php')) {
        require_once('modules/' . $classname . '.php');
    } else {
        echo "error al cargar la clase";
    }
}

spl_autoload_register('controllers_autoload');
