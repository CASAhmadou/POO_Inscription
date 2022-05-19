<?php
namespace App\Core;
  use App\Model\Classe;
  $cl = new Classe();
  $classes = $cl->findAll();
?>

<div class="card ml-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">LISTE DES CLASSES</h4>
        <p class="card-text">
        
          <table class="table">
            <thead>
              <tr>
              <th scope="col">Libelle</th>
              <th scope="col">Niveau</th>
                <th scope="col">Filliere</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($classes as $classe): ?>
              <tr>
                  <td><?= $classe->libelle ?></td>
                  <td><?= $classe->niveau ?></td>
                  <td><?= $classe->filliere ?></td>
                  
                </tr>
                <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>