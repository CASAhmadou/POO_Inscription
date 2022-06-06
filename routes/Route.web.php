<?php

use App\Model\RPD;
use App\Core\Router;
use App\Model\Classe;
use App\Model\Module;
use App\Model\Etudiant;
use App\Model\AttacheClasse;
use App\Controller\UserController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/lister-classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/edit-classe',[ClasseController::class,"editClasse"]);
$router->route('/delete-classe',[ClasseController::class,"deleteClasse"]);
$router->route('/demande',[DemandeController::class,"creerDemande"]);
$router->route('/traitement-demande',[DemandeController::class,"traitementDemande"]);
$router->route('/lister-demandes',[DemandeController::class,"listerDemande"]);
$router->route('/lister-etudiants',[EtudiantController::class,"listerEtudiant"]);
$router->route('/inscription',[EtudiantController::class,"createEtudiant"]);
$router->route('/lister-modules',[ModuleController::class,"listerModule"]);
$router->route('/lister-personnes',[PersonneController::class,"lister"]);
$router->route('/lister-professeurs',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/add-professeur',[ProfesseurController::class,"creerProfesseur"]);
$router->route('/accueil',[UserController::class,"accueil"]);
$router->route('/classes-professeur',[ProfesseurController::class,"affecterClasse"]);

try{
    //Essaie de Resoudre la route
    $router->resolve();
}catch(RouteNotFoundException $ex){
    //Capture l'exception et affiche le
    echo $ex->message;
}

// $et= new Etudiant();
// $et->setNomComplet('Aminata Ba');
// $et->set
