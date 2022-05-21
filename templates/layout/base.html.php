<?php
use App\Core\Constantes;
use App\Core\Role;

/*if($_SESSION["role"] == "ROLE_RPD"): ?>
    <?php endif;?>*/
    // dd(Role::isConnect());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.user.css'?>">
        <title>Document</title>
    </head>
    <body> 
        <ul class="nav nav-pills justify-content-end mt-5">
        <?php if($_SESSION["role"] == "ROLE_RPD"): ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."accueil"?>">Accueil</a>
          </li>
          <?php endif;?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Inscription</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-etudiants"?>">Liste des Etudiants</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Inscription et Réinscription d'un Etudiant</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Lister Demandes Etudiant en cours</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Professeur</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-professeurs"?>">Liste des Professeurs</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Ajouter un Professeur</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Classe</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-classes"?>">Liste des Classes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Création d'une Classe</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Affecter une Classe à un professeur</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Module</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-modules"?>">Liste des Modules</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Ajouter nouveau Module</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Etudiant</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Demande Etudiant</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Formulaire Demande</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste Demande en Cours</a>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Demande accepter </a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Demande annuler</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Constantes::WEB_ROOT."logout"?>">Deconnexion</a>
            </li>
        </ul>
    
        <?=$content_for_views?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>