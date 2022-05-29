<?php

  use App\Core\Constantes;
  use App\Model\Professeur;
  use App\Model\Classe;
  use App\Model\ClasseProfesseur;

  $pr=new Professeur();
  $professeurs= $pr->findAll();
  $clprof = new ClasseProfesseur();
  $clprofs = $clprof->classes($id);

  // var_dump($clprofs);die;

?>

<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">LISTE des Classes du PROFESSEUR <?= $professeurs[0]->nom_complet?>
         
        </h4>
        <p class="card-text">

          <table class="table">

              <thead>
                <tr>
                  <th scope="col">Classes</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($clprofs as $classe): ?>
                      <tr>
                        <td><?= $classe->libelle ?></td>
                      </tr>
                      <?php endforeach ?>
              </tbody>
            </table>
          </p>
    </div>
</div>