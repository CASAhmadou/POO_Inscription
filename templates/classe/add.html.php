<?php

use App\Core\Constantes;
?>



<div class="container-fluid d-flex justify-content-center mt-5">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Ajouter</h4>
    <p class="card-text ml-3">
      <form name="form" method="POST" action="<?=$action?>">
          <div class="mb-3">
            <label for="nomComplet" class="form-label">Libelle</label>
            <input type="texte" name="libelle" class="form-control" value="<?=isset($classe->libelle)?$classe->libelle:""?>" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="grade" class="form-label">Niveau</label>
            <input type="texte" name="niveau" class="form-control" value="<?=isset($classe->niveau)?$classe->niveau:""?>" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="grade" class="form-label">Filliere</label>
            <input type="texte" name="filliere" class="form-control" value="<?=isset($classe->filliere)?$classe->filliere:""?>" id="exampleInputPassword1">
          </div>
          <button type="submit" name="submit" class="btn btn-primary" value="">Submit</button>
      </form>
    </p>
  </div
</div>
</div>