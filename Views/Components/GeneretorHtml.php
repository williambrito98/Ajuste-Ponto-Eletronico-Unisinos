<?php

class GeneretorHtml
{

    private static $generetorHtml = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$generetorHtml) {
            self::$generetorHtml = new GeneretorHtml();
        }

        return self::$generetorHtml;
    }

    public function setHeader(String $type, String $icon = '', array $assets = [])
    {

        function publicHeader($assets)
        {
            $typeAssets = [
                "js" => "<script src='{}'></script>",
                "css" => "<link rel='stylesheet' href='{}' type='text/css'>"
            ];
            $header = "<!doctype html>
            <html lang='pt-br'>
            <head>
                <!-- Required meta tags -->
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            
                <!-- Bootstrap CSS -->
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
                <title>Ajuste Ponto</title>
            ";
            foreach ($assets as $key => $value) {
                $header .= preg_replace('/{}/', $value, $typeAssets[$key]);
            }

            $header .= "</head>";

            return $header;
        }
        echo $type($assets);
    }

    public function formLogin(String $action, String $method, array $alert = [])
    {


        $typeAlert = [
            "error" => "<div class='alert alert-danger' role='alert'>
                            {}
                        </div>"
        ];

        $form =  "<body id='login' class='d-flex justify-content-center align-items-center bg-primary'>
                    <form class='bg-white p-5 rounded m-3' method='$method' action='$action'>
                        <h1>Iniciar Seção</h1>
                        <div class='form-group'>
                            <label for='exampleInputEmail1'>Email</label>
                            <input type='email' class='form-control' id='email' placeholder='Email' name='email'>
                        </div>
                        <div class='form-group'>
                            <label for='exampleInputPassword1'>Senha</label>
                            <input type='password' class='form-control' id='senha' placeholder='Senha' name='senha'>
                        </div>
                        <div class='my-3'>
                            <a href='#' class='nav-link'>Esqueceu seu Senha ?</a>
                        </div>
                        <div class='my-3'>
                            <a href='#' class='nav-link'>Criar Login</a>
                        </div>";
        if (!empty($alert)) {
            $alert = str_replace('{}', $alert[array_keys($alert)[0]], $typeAlert[array_keys($alert)[0]]);
            $form .= $alert;
        }
        $form .= "<button type='submit' class='btn btn-primary'>Entrar</button>
                  </form>
                  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
                  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
                  </body>";
        echo $form;
    }
}
