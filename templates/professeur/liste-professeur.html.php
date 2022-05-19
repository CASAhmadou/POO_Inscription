<?php
  use App\Model\Professeur;
  $prof = new Professeur();
  $professeurs = $prof->findAll();
?>

<div class="card ml-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">LISTE DES PROFESSEURS</h4>
        <p class="card-text">
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom Complet</th>
                <th scope="col">Grade</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($professeurs as $personne): ?>
              <tr>
                  <td><?= $personne->nom_complet ?></td>
                  <td><?= $personne->grade ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>