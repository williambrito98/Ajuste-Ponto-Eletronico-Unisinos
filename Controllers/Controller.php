<?php


class Controller
{
    public function view($name, $content)
    {
        $nameView = str_replace('.', '\\', $name);
        require dirname(__DIR__) . '\\Views\\' . $nameView . ".php";
    }

    public function redirect($route)
    {
        header("Location: {$_SERVER['HTTP_REFERER']}$route");
    }
}
