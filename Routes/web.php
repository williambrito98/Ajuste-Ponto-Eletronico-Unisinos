<?php
require dirname(__DIR__) . "\\Helpers\\Routes.php";
require dirname(__DIR__) . "\\Controllers\\ControllerLogin.php";

use Controller\Login\ControllerLogin;
use Helpers\Routes\Routes;

error_reporting(E_ALL);

Routes::redirect("/", ControllerLogin::class, 'index');
