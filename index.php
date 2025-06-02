<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/control/CFrontController.php';





require_once (__DIR__ . "/config/autoloader.php");
require_once __DIR__ . "/install/StartSmarty.php";
require_once (__DIR__ . "/install/Installation.php");


Installation::install();

//richiamo front controller

$frontController = new CFrontController();
$frontController->run($_SERVER['REQUEST_URI']);
