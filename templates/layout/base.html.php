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
       
        <div class="containt m-3 mt-5">
          <form class="d-flex mr-1" style="height: 20%" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Recherche">
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <ul class="nav nav-pills justify-content-end">
        
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."accueil"?>">Accueil</a>
            </li>

            <?php if($_SESSION["role"] =="ROLE_ATTACHE"): ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-etudiants"?>">Inscription</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-professeurs"?>">Professeurs</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-classes"?>">Classes</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-modules"?>">Modules</a>   
              </li>
            <?php endif;?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Demande Etudiants</a>
              <ul class="dropdown-menu">
                
                <?php if($_SESSION["role"] =="ROLE_ATTACHE"): ?>
                  <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."demande"?>"">Formulaire Demande</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste Demandes</a>
                <?php endif;?>

                <?php if($_SESSION["role"] =="ROLE_ETUDIANT"): ?>
                  <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste mes Demandes</a>
                <?php endif;?>

                <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
                  <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."traitement-demande"?>"">Demande à Traiter</a></li>
                <?php endif;?>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?=Constantes::WEB_ROOT."logout"?>">Deconnexion</a>
            </li>
        </ul>
        </div>
        <div class="container col-8">
        <?=$content_for_views?>
        </div>
    <script src="https://kit.fontawesome.com/746ce6113a.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>