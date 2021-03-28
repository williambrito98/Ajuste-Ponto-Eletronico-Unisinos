<?php


namespace Helpers\Routes;

class Routes
{
    public static function redirect($route = "", $class = "", $method = "")
    {
        $routeRequest = str_replace("/Ponto%20Eletronico%20Unisinos", "", $_SERVER['REQUEST_URI']);
        if ($route == $routeRequest) {
            $class::$method($_REQUEST);
        }
    }

    public static function view($name, $content)
    {
    }
}
