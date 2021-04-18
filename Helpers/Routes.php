<?php


namespace Helpers\Routes;

class Routes
{
    public static function redirect($route = "", $class, $method = "")
    {
        $routeRequest = str_replace("/Ponto%20Eletronico%20Unisinos", "", $_SERVER['REQUEST_URI']);
        if ($route == $routeRequest) {
            $instance = new $class();
            $instance->$method($_REQUEST);
        }
    }

    public static function view($route, $name, $content = [])
    {
        $routeRequest = str_replace("/Ponto%20Eletronico%20Unisinos", "", $_SERVER['REQUEST_URI']);
        if ($route == $routeRequest) {
            $nameView = str_replace('.', '\\', $name);
            require dirname(__DIR__) . '\\Views\\' . $nameView . ".php";
        }
    }
}
