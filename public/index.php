<?php
require("../vendor/autoload.php");

//Autoload(inclure les fichiers)
use App\Core\IModel;
use App\Core\Model;
use App\Model\Personne;
use App\Model\User;
use App\Model\AttacheClasse;
use App\Model\Classe;
use App\Confi\Constantes;
use App\Model\AnneeScolaire;
use App\Model\Module;
use App\Model\RPD;
use App\Model\Etudiant;
use App\Model\Inscription;
use App\Model\Professeur;

$prof=new Professeur();
$prof->setNomComplet("Cheikhna Ahmadou Sakho");
$prof->setGrade("Ingénieur");
$prof->insert();

