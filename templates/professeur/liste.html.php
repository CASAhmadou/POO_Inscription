<?php
  use App\Core\Constantes;
  use App\Model\Professeur;
  $prof = new Professeur();
  $professeurs = $prof->findAll();
?>

<div class="card ml-5">
  <div class="card-body">
      <h4 class="card-title">LISTE DES PROFESSEURS</h4>
      <p class="card-text">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="<?= Constantes::WEB_ROOT."add-professeur"?>">
            <i class="fa-solid fa-plus"></i>
            </a>
          <button class="text-light btn btn-info me-md-2" type="button">Nouveau</button>
        </div>
        
        <table class="table table-striped table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="col-4" scope="col">Nom Complet</th>
              <th class="col-4" scope="col">Grade</th>
              <th class="col-3" scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($professeurs as $personne): ?>
            <tr>
              <td><?= $personne->nom_complet ?></td>
              <td><?= $personne->grade ?></td>
              <td class="d-flex justify-content-around align-self-center">
              <a href="<?= Constantes::WEB_ROOT."classes-professeur"?>">
              <button class="btn btn-outline-info" type="submit">
                <i class="fa-solid fa-school icon"></i>
              </button>
              </a>
                <button class="btn btn-outline-info" type="submit">
                  <i class="fa-solid fa-file-circle-plus icon"></i>
                </button>
                <button class="btn btn-outline-info" type="submit">
                  <i class="fa-solid fa-user-xmark"></i>
                </button>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </p>
  </div>
</div>