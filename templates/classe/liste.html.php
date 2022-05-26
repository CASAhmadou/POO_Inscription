<?php

use App\Core\Constantes;
use App\Model\Classe;
  $cl = new Classe();
  $classes = $cl->findAll();
?>

<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">LISTE DES CLASSES</h4>
        <p class="card-text">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= Constantes::WEB_ROOT."add-classe"?>">
              <i class="fa-solid fa-plus"></i>
            </a>
            <button class="btn btn-primary me-md-2" type="button">Nouvelle</button>
          </div>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Libelle</th>
                <th scope="col">Niveau</th>
                <th scope="col">Filliere</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($classes as $classe): ?>
              <tr>
                  <td><?= $classe->libelle ?></td>
                  <td><?= $classe->niveau ?></td>
                  <td><?= $classe->filliere ?></td>
                  <td>
                    <a href="<?= Constantes::WEB_ROOT."edit-classe/$classe->id"?>">
                      <button type="button" class="btn btn-outline-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </button>
                    </a>

                    <button type="button" class="btn btn-outline-primary">
                      <i class="fa-solid fa-person-chalkboard"></i>
                    </button>
                    
                    <a href="<?= Constantes::WEB_ROOT."delete-classe"?>">
                      <button type="button" class="btn btn-outline-primary">
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                    </a>
                  </td>
                </tr>
                <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>