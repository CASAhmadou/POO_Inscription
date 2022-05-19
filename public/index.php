<?php

use App\Model\Classe;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require("../vendor/autoload.php");
require_once("../core/Functions.php");
//dd($_SERVER);
require_once("../routes/Route.web.php");


/*$et=new Classe();
$et->setLibelle("Amala Sakho");
$et->setNiveau("L1");
$et->setFilliere("Informatique");;
$et->insert();*/