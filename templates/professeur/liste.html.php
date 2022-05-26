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
          <button class="btn btn-primary me-md-2" type="button">Nouveau</button>
        </div>
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nom Complet</th>
              <th scope="col">Grade</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($professeurs as $personne): ?>
            <tr>
              <td><?= $personne->nom_complet ?></td>
              <td><?= $personne->grade ?></td>
              <td>
                <button class="btn btn-outline-success" type="submit">
                  <a href="<?= Constantes::WEB_ROOT."classes-professeur"?>">
                    <i class="fa-solid fa-school icon"></i>
                  </a>
                </button>
                <button class="btn btn-outline-success" type="submit">
                  <i class="fa-solid fa-file-circle-plus icon"></i>
                </button>
                <button class="btn btn-outline-success" type="submit">
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