<?php
  use App\Model\Etudiant;
  $et = new Etudiant();
  $etudiants = $et->findAll();
?>

<div class="card ml-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Liste des Etudiants</h4>
        <p class="card-text">
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Nom Complet</th>
                <th scope="col">Sexe</th>
                <th scope="col">Adresse</th>              
              </tr>
            </thead>
            <tbody>
              <?php foreach ($etudiants as $personne): ?>
              <tr>
                  <td><?= $personne->matricule ?></td>
                  <td><?= $personne->nom_complet ?></td>
                  <td><?= $personne->sexe ?></td>
                  <td><?= $personne->adresse ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>