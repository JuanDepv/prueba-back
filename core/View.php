<?php

class View
{
    public function render($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        require_once 'views/' . $view . '.php';
    }
}
