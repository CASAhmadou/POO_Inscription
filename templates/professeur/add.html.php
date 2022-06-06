<?php
  use App\Core\Constantes;
  use App\Model\Classe;
  use App\Model\Module;

  $cl = new Classe();
  $classes = $cl->findAll();
  $module = new Module();
  $modules= $module->findAll();
?>

<div class="container-fluid d-flex justify-content-center row">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Ajouter Professeur</h4>
        <p class="card-text ml-3 d-flex">
          <form name="form" method="POST" action="<?=Constantes::WEB_ROOT."add-professeur"?>" class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="nomComplet" class="form-label">Nom Complet</label>
                <input type="texte" name="nomComplet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="grade" class="form-label">Grade</label>
                <input type="texte" name="grade" class="form-control" id="grade">
              </div>
            </div>
            
        <img class="img-fluid col-6"src="<?=Constantes::WEB_ROOT.'images/teacher.png'?>" alt="">
     
        <div class="col-6">
              <div>
                <label for="nomComplet" class="form-label">Affecter de(s) Classe(s)</label>
                <select id="inputState" class="form-select">
                  <?php foreach ($classes as $classe): ?>
                    <option selected><?= $classe->libelle ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="mt-3">
                <label for="nomComplet" class="form-label">Affecter de(s) Module(s)</label>
                <select id="inputState" class="form-select">
                  <?php foreach ($modules as $module): ?>
                    <option selected><?= $module->nom_module ?></option>
                  <?php endforeach ?>
                </select>
              </div>
        </div>
              <!-- <main class="container col-8 row">
                <h2> Liste des Classes</h2>
                <?php foreach ($classes as $classe): ?>
                <div class="form-check col-4">
                  <input class="form-check-input" name="classe[]" type="checkbox" value="<?= $classe->id ?>" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault"><?= $classe->libelle ?></label>
                </div>
                <?php endforeach ?>
              </main> -->
                
              <button type="submit" name="submit" style="height:20%" class="text-light btn btn-info col-4">Submit</button>
          </form>
        </p>
        
    </div>
  </div>
</div>