<?php

use App\Core\Router;
use App\Exception\RouteNotFoundException;


$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);

try{
    //Essaie de Resoudre la route
    $router->resolve();
}catch(RouteNotFoundException $ex){
    //Capture l'exception et affiche le
    echo $ex->message;
}