<?php

//Autoload(inclure les fichiers)
use Cas\Core\IModel;
use Cas\Core\Model;
use Cas\Models\Personne;
use Cas\Models\User;
use Cas\Models\AttacheClasse;
use Cas\Models\Classe;
use Cas\Config\Constantes;
use Cas\Models\AnneeScolaire;
use Cas\Models\Module;
use Cas\Models\RPD;
use Cas\Models\Etudiant;
use Cas\Models\Inscription;


//Créer Objet ou Instanciation

//appel une méthode de la classe du nom de construteur
$att1= new AttacheClasse();
$att2= new AttacheClasse();
//Donner un etat à un objet
$att1->setId(1)
      ->setNomComplet('CAS');
$att2->setId(2)
      ->setNomComplet('Dieyna Sakho');

//appel méthode static
//$pers1= new Personne();
//Personne::setNbrPersonne(12);
//echo Personne::getNbrPersonne();

$insc1= new Inscription();
$insc1->AttacheClasse();
$insc1->AnneeScolaire();
