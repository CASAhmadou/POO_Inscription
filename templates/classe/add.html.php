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
                <!--<label for="grade" class="form-label">Niveau</label>-->
                <select id="inputState" name="niveau" value="" class="form-select">
                    <option selected><?=isset($classe->niveau)?$classe->niveau:"Autre..."?></option><option>L1</option><option>L2</option>
                    <option>L3</option><option>M1</option><option>M2</option><option>Doctorat</option>
                </select>
               <!-- <input type="text" name="niveau" class="form-control" value="<?=isset($classe->niveau)?$classe->niveau:""?>" id="exampleInputPassword1">-->
              </div>
              <div class="mb-3">
                <label for="grade" class="form-label">Filliere</label>
                <input type="texte" name="filliere" class="form-control" value="<?=isset($classe->filliere)?$classe->filliere:""?>" id="exampleInputPassword1">
              </div>
              <button type="submit" name="submit" class="text-light btn btn-info" value="">Submit</button>
          </form>
        </p>
    </div>
  </div>
<img class="img-fluid col-6"src="<?=Constantes::WEB_ROOT.'images/classes.png'?>" alt="">

</div>
