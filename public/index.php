<?php

use App\Model\Classe;
use App\Model\Module;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require("../vendor/autoload.php");
require_once("../core/Functions.php");
//dd($_SERVER);
require_once("../routes/Route.web.php");

/*$et=new Mo();
$et->setNomModule("PHP");
$et->insert();*/