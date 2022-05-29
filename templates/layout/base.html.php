<?php
use App\Core\Constantes;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.user.css'?>">
        <title>Document</title>
    </head>
    <body>
        <!-- Menu -->
        <div class="containt bg-info sticky-top">
          <form class="d-flex mr-1" style="height: 20%" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Recherche">
            <button class="text-light btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>

          
          <ul class="nav nav-pills justify-content-end">
        
            <li class="nav-item">
              <a class="text-light nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."accueil"?>">Accueil</a>
            </li>

            <?php if($_SESSION["role"] =="ROLE_ATTACHE"): ?>
              <li class="nav-item">
                <a class="text-light nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-etudiants"?>">Inscription</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="text-light nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-professeurs"?>">Professeurs</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="text-light nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-classes"?>">Classes</a>
              </li>
            <?php endif;?>

            <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
              <li class="nav-item">
                <a class="text-light nav-link" aria-current="page" href="<?=Constantes::WEB_ROOT."lister-modules"?>">Modules</a>   
              </li>
            <?php endif;?>

            <li class="nav-item dropdown">
              <a class="text-light nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Demande Etudiants</a>
              <ul class="bg-info dropdown-menu">
                
                <?php if($_SESSION["role"] =="ROLE_ATTACHE"): ?>
                  <li><a class="dropdown-item" href="<?=Constantes::WEB_ROOT."demande"?>"">Formulaire Demande</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste Demandes</a>
                <?php endif;?>

                <?php if($_SESSION["role"] =="ROLE_ETUDIANT"): ?>
                  <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste mes Demandes</a>
                <?php endif;?>

                <?php if($_SESSION["role"] =="ROLE_RPD"): ?>
                  <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."traitement-demande"?>"">Demande à Traiter</a></li>
                <?php endif;?>
              </ul>
            </li>

            <li class="nav-item">
              <a class="text-light nav-link" href="<?=Constantes::WEB_ROOT."logout"?>">Deconnexion</a>
            </li>
        </ul>
        </div>


          <!-- offcanvas navbar-->
          <nav class="navbar navbar-light bg-light col-4">

            <div class="container-fluid">
              <button class="bg-info navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas bg-info offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
               <!--<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Université C A S</h5>-->
               <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               <div class="offcanvas-header">
                 <form class="d-flex">
                   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Recherche">
                   <button class="text-light btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    
                    <li class="nav-item">
                      <a class="text-light nav-link active" aria-current="page" href="<?=Constantes::WEB_ROOT."accueil"?>">Accueil</a>
                    </li>
                    <li>
                          <hr class="dropdown-divider">
                        </li>
                    <li class="nav-item">
                      <a class="text-light nav-link" href="<?=Constantes::WEB_ROOT."lister-etudiants"?>">Inscription</a>
                    </li>
                    <li>
                          <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                      <a class="text-light nav-link" href="<?=Constantes::WEB_ROOT."lister-professeurs"?>">Professeurs</a>
                    </li>
                    <li>
                          <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item">
                      <a class="text-light nav-link" href="<?=Constantes::WEB_ROOT."lister-classes"?>">Classes</a>
                    </li>
                    <li>
                          <hr class="dropdown-divider">
                        </li>
                    <li class="nav-item">
                      <a class="text-light nav-link" href="<?=Constantes::WEB_ROOT."lister-modules"?>">Modules</a>
                    </li>
                    <li>
                          <hr class="dropdown-divider">
                        </li>
                    <li class="nav-item dropdown">
                      <a class="text-light nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Demande Etudiants
                      </a>
                      <ul class="dropdown-menu bg-info" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."demande"?>">Formulaire Demande</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste Demandes</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."lister-demandes"?>">Liste mes Demandes</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="text-light dropdown-item" href="<?=Constantes::WEB_ROOT."traitement-demande"?>">Demande à Traiter</a></li>
                      </ul>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </nav>


        <div class="container col-8 mt-5">
          <?=$content_for_views?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://kit.fontawesome.com/746ce6113a.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="<?=Constantes::WEB_ROOT.'js/script.js'?>"></script>
    </body>
</html>