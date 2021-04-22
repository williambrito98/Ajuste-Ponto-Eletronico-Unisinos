<?php
session_start();

class Logout
{
    public function index()
    {
        session_destroy();
        header("Location: {$_SERVER['HTTP_ORIGIN']}/Ponto%20Eletronico%20Unisinos/");
    }
}



$logout = new Logout();
$logout->index();
