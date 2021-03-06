<?php
  use App\Model\Demande;
  $dem = new Demande();
  $demandes = $dem->findAll();
?>

<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">LISTE DES DEMANDES</h4>
        <p class="card-text">
        
          <table class="table table-striped table-bordered table-hover text-center">
            <thead>
              <tr>
                <th scope="col">Eudiant</th>
                <th scope="col">Motif</th>
                <th scope="col">Etat</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($demandes as $demande): ?>
              <tr>
                  <td><?= $demande->nom_complet ?></td>
                  <td><?= $demande->motif ?></td>
                  <td><?= $demande->etat ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
          </table>

        </p>
    </div>
</div>