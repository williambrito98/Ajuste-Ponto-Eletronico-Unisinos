<?php
require dirname(__DIR__) . '\\Controllers\\Controller.php';
require dirname(__DIR__) . '\\Controllers\\Validation.php';
require dirname(__DIR__) . '\\Models\\Usuario.php';
require dirname(__DIR__) . '\\Models\\Perfil.php';
session_start();




class ControllerLogin extends Controller
{
    public function index($req)
    {
        $usuario = new Usuario();
        $registros = $usuario->get(["email" => $req['email']]);
        if ($registros) {
            if (password_verify($req['senha'], $registros['senha'])) {
                $_SESSION['id'] = $registros['id'];
                $_SESSION['nome'] = $registros['nome'];
                $_SESSION['email'] = $registros['email'];
                $perfil = new Perfil();
                $_SESSION['perfil'] = $perfil->getAll();
                header("Location: {$_SERVER['HTTP_REFERER']}perfil.php");
                return true;
            }
        }
        $_SESSION['error'] = 'Email ou senha incorreto';
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}


$controller = new ControllerLogin();
$controller->index($_REQUEST);
