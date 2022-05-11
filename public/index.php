<?php
require("../vendor/autoload.php");

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


echo Personne::table();
echo User::table();
