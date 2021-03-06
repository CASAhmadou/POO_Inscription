<?php

use App\Core\Constantes;
use App\Model\Etudiant;
  $et = new Etudiant();
  $etudiants = $et->findAll();
?>

<div class="card">
    <div class="card-body d-grid">
        <h4 class="card-title">LISTE DES ETUDIANTS</h4>
        <p class="card-text">
          <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <a href="<?=Constantes::WEB_ROOT."inscription"?>">
              <button class="btn btn-primary me-md-2" type="button">
                <i class="fa-solid fa-plus"></i>
              </button>
            </a>
          </div>
          <table class="table table-striped table-bordered table-hover text-center">
            <thead>
              <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Sexe</th>
                <th scope="col">Adresse</th>  
                <th scope="col">Action</th>            
              </tr>
            </thead>
            <tbody>
              <?php foreach ($etudiants as $personne): ?>
                <tr>
                  <td><?= $personne->matricule ?></td>
                  <td><?= $personne->nom_complet ?></td>
                  <td><?= $personne->sexe ?></td>
                  <td><?= $personne->adresse ?></td>
                  <td class="d-flex justify-content-around align-self-center">
                    <button type="button" class="btn btn-outline-primary">
                      <a href="<?=Constantes::WEB_ROOT,"inscription"?>">
                        Réinscription
                      </a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa-solid fa-chalkboard-user"></i>
                    </button>
                    <button class="btn btn-outline-success" type="submit">
                      <i class="fa-solid fa-user-xmark"></i>
                  </button>
                  <button class="btn btn-outline-success" type="submit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>