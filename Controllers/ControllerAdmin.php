<?php
require dirname(__DIR__) . '\\Controllers\\Controller.php';
require dirname(__DIR__) . '\\Models\\AjustesPonto.php';
require dirname(__DIR__) . '\\Models\\Justificativas.php';
session_start();

class ControllerAdmin extends Controller
{
    public function index($req)
    {
        unset($_SESSION['perfil']);
        $ajustesPonto = new AjustesPonto();

        $_SESSION['ajustes'] = $ajustesPonto->get($_SESSION['id']);
        $justificativas = new Justificativas();
        $_SESSION['justificativas'] = $justificativas->getAll();
        header("Location: {$_SERVER['HTTP_ORIGIN']}/Ponto%20Eletronico%20Unisinos/admin/");
    }

    public function insertAjuste($req)
    {
        unset($_SESSION['inserir']);
        $ajustesPonto = new AjustesPonto();
        $_SESSION['msg'] =  $ajustesPonto->insertAjuste($req);
        header("Location: {$_SERVER['HTTP_ORIGIN']}/Ponto%20Eletronico%20Unisinos/admin");
    }

    public function visualizarAjustes($req)
    {
        $ajustesPonto = new AjustesPonto();
        $_SESSION['conteudo_ajustes'] = $ajustesPonto->getAjustes($req['id']);
        header("Location: {$_SERVER['HTTP_ORIGIN']}/Ponto%20Eletronico%20Unisinos/admin/visualizarAjuste.php");
    }
}



$admin = new ControllerAdmin();
if (isset($_SESSION['inserir'])) {
    $admin->insertAjuste($_REQUEST);
} else if (isset($_SESSION['perfil'])) {
    $admin->index($_REQUEST);
} else if (isset($_GET)) {
    $admin->visualizarAjustes($_GET);
} else {
    $admin->index($_REQUEST);
}
