<?php

require dirname(__DIR__) . '\\Controllers\\Validation.php';
require dirname(__DIR__) . '\\Models\\Usuario.php';
require dirname(__DIR__) . '\\Controllers\\Controller.php';



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
                $this->redirect('admin');
                return true;
            }
        }

    }
}
