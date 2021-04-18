<?php
require dirname(__DIR__) . "\\Helpers\\Routes.php";
require dirname(__DIR__) . "\\Controllers\\ControllerLogin.php";

use Helpers\Routes\Routes;

error_reporting(E_ALL);

Routes::view("/", 'index');
Routes::redirect("/login", ControllerLogin::class, 'index');
Routes::view("/admin", 'index');
