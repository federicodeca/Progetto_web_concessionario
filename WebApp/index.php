//agora
<?php
require_once (__DIR__ . "config/autoloader.php");
//require_once __DIR__ . "install/StartSmarty.php";
require_once (__DIR__ . "install/Installation.php");


Installation::install();

//richiamo front controller

