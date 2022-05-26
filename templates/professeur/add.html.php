<?php
  use App\Core\Constantes;
  use App\Model\Classe;
  $cl = new Classe();
  $classes = $cl->findAll();
?>

<div class="container-fluid d-flex justify-content-center mt-5 row">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Ajouter Professeur</h4>
    <p class="card-text ml-3 d-flex">
      <form name="form" method="POST" action="<?=Constantes::WEB_ROOT."add-professeur"?>" class="row">
        <div class="col-4">
          <div class="mb-3">
            <label for="nomComplet" class="form-label">Nom Complet</label>
            <input type="texte" name="nomComplet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="texte" name="grade" class="form-control" id="grade">
          </div>
        </div>

          <main class="container col-8 row">
            <h2> Liste des Classes</h2>
            <?php foreach ($classes as $classe): ?>
            <div class="form-check col-4">
              <input class="form-check-input" name="classe[]" type="checkbox" value="<?= $classe->id ?>" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault"><?= $classe->libelle ?></label>
            </div>
            <?php endforeach ?>
          </main>

          <button type="submit" name="submit" class="btn btn-primary col-4">Submit</button>
      </form>
    </p>
  </div>
</div>
</div>